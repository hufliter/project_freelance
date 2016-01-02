<?php
namespace App\Http\Controllers\admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\Products;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;
use Symfony\Component\Console\Helper;


class ProductsController extends Controller {
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(Request $req) {
        $products = new Products();
        $productsData = $products->findAllProducts();
        return view('admin.products.index',array('products'=>$productsData));
    }
    public function getCreate(Request $req){
        //load category
        $cate = new Category();
        $cateData = $cate->where('is_active','=',1)->get();
        return view('admin.products.create',array('cate'=>$cateData));
    }
    public function postCreate(Request $req) {
        $data = $req->all();
        if( !empty($data) ){

            $rules = array(
                'slug' => 'required|min:3|max:50|unique:products',
                'name' => 'required|min:3|max:100',
                'cate_id' => 'required',
                'usage' => 'required|min:3|max:5000',
                'description' => 'required|min:3|max:5000',
            );
            $validator = Validator::make($data,$rules);
            if( $validator->fails() ){
                return Redirect::route('products.index')->withErrors($validator);
            } else {
                if( $req->hasFile('file_upload') ) {
                    $files = Input::file('file_upload');
                    $file_count = count($files);
                    $uploadCount = 0;
                    $imgArr = array();
                    foreach($files as $file){
                        $imgRules = array(
                            'file_upload' => 'required|mimes:png,gif,jpeg'
                        );
                        $imgValidator = Validator::make(array('file_upload'=>$file),$imgRules);
                        if( $imgValidator->fails() ){
                            return Redirect::route('products.index')->withErrors($imgValidator);
                        } else {
                            $imgPath = 'upload/img';
                            $fileName = uniqid() . '.' . $file->getClientOriginalExtension();
                            $path = public_path('upload/img/' . $fileName);
                            Image::make($file->getRealPath())->save($path);
                            $imgArr[] = $fileName;
                            $uploadCount++;
                        }
                    }

                    //some function is missing. build slug, check data user given before add to db, change image name.
                    if( $uploadCount == $file_count ) {
                        $encodedImgArr = json_encode($imgArr);
                        $products = new Products();
                        $products->cate_id = $data['cate_id'];
                        $products->name = $data['name'];
                        $products->image = $encodedImgArr;
                        $products->usage = $data['usage'];
                        $products->size = $data['size'];
                        $products->weight = $data['weight'];
                        $products->package = $data['package'];
                        $products->words = $data['words'];
                        $products->solder = $data['solder'];
                        $products->description =  $data['description'];
                        $products->is_popular = empty($data['is_popular']) ? 0 : $data['is_popular'];
                        $products->is_active = $data['is_active'];
                        $products->slug = $data['slug'];

                        if( $products->save() ) {
                            return Redirect::route('products.index')->withMessages('Create Product Successful');
                        } else {
                            return Redirect::route('products.index')->withErrors('Something went wrong');
                        }
                    } else {
                        return Redirect::route('products.index')->withErrors('Something went wrong');
                    }
                }
            }
        }
    }
    public function delete(Request $req) {
        $id = $req->input('id');
        if( !empty($id) && is_numeric($id) ){
            $products = new Products();
            $productsData = $products->findOrFail($id);
            if( $productsData->delete() ){
                return Redirect::route('products.index')->withMessage('Deleted Product Successful');
            } else {
                return Redirect::route('products.index')->withErrors('Something went wrong');
            }
        } else {
            return Redirect::route('products.index')->withErrors('Invalid Product Id');
        }
    }
    public function getView(Request $req) {
        $id = $req->input('id');
        if( !empty($id) && is_numeric($id) ) {
            $product = new Products();
            $productData = $product->findOrFail($id);

            if( !empty($productData) ){
                $image = json_decode($productData->image);
                $productData->image = $image;
                return view('admin.products.view',array('product'=>$productData));
            } else {
                return Redirect::route('products.index')->withErrors('Not Found Product');
            }
        } else {
            return Redirect::route('products.index')->withErrors('Invalid Product Id');
        }
    }
    public function getEdit(Request $req) {
        $id = $req->input('id');
        if( !empty($id) && is_numeric($id) ){
            $product = new Products();
            $productData = $product->findProductById($id);
            if( !empty($productData) ){
                $image = json_decode($productData->image);
                $productData->image = $image;
                $cate = new Category();
                $cateData = $cate->getAllCate();
                return view('admin.products.edit',array('product'=>$productData,'cate'=>$cateData));
            } else {
                return Redirect::route('products.index')->withErrors('Not found Product');
            }
        } else {
            return Redirect::route('products.index')->withErrors('Invalid Product Id');
        }
    }

    public function postEdit(Request $req){
        $data = $req->all();
        if( !empty($data) ) {
            $rules = array(
                'slug' => 'required|min:3|max:50',
                'product_name' => 'required|min:3|max:50',
                'cate_id' => 'required',
                'usage' => 'required|min:3|max:300',
                'product_description' => 'required|min:3|max:300',
            );
            $validator = Validator::make($data,$rules);
            if( $validator->fails() ){
                return Redirect::route('products.index')->withErrors($validator);
            } else {

                $products = new Products();
                $productsData = $products->findOrFail($data['product_id']);
                $productsData->cate_id = $data['cate_id'];
                $productsData->name = $data['product_name'];
                $productsData->usage = $data['usage'];
                $productsData->description =  $data['product_description'];
                $productsData->is_active = $data['product_active'];
                $productsData->slug = $data['slug'];
                $productsData->size = $data['size'];
                $productsData->weight = $data['weight'];
                $productsData->package = $data['package'];
                $productsData->words = $data['words'];
                $productsData->solder = $data['solder'];
                $productsData->is_popular = $data['is_popular'];

                if( $req->hasFile('file_upload') ) {
                    $files = Input::file('file_upload');
                    $file_count = count($files);
                    $uploadCount = 0;
                    $imgArr = array();
                    foreach($files as $file){
                        $imgRules = array(
                            'file_upload' => 'required|mimes:png,gif,jpeg'
                        );
                        $imgValidator = Validator::make(array('file_upload'=>$file),$imgRules);
                        if( $imgValidator->fails() ){
                            return Redirect::route('products.index')->withErrors($imgValidator);
                        } else {
                            $imgPath = 'upload/img';
                            $fileName = uniqid() . '.' . $file->getClientOriginalExtension();
                            $path = public_path('upload/img/' . $fileName);
                            Image::make($file->getRealPath())->resize(350,200)->save($path);
                            $imgArr[] = $fileName;
                            $uploadCount++;
                        }
                    }

                    //edit function: need to load old image.
                    if( $uploadCount == $file_count ) {
                        $encodedImgArr = json_encode($imgArr);

                        $productsData->image = $encodedImgArr;


                    } else {
                        return Redirect::route('products.index')->withErrors('Oop! Something went wrong');
                    }
                } else {
                    $productsData->image = $productsData->image;
                }
                if( $productsData->save() ) {
                    return Redirect::route('products.index')->withMessages('Edit Product Successful');
                } else {
                    return Redirect::route('products.index')->withErrors('Something went wrong');
                }
            }
        }
    }

    private function cleanFileName($fileName)
    {
        //remove blanks
        $fileName = preg_replace('/\s+/', '', $fileName);
        //remove charactes
        $fileName = preg_replace("/^([-a-z0-9_\s])+$/i", "", $fileName);

        return $fileName;
    }
}
?>