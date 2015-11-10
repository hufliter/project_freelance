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


class ProductsController extends Controller {
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(Request $req) {
        $products = new Products();
        $productsData = $products->all();
        return view('admin.products.index',array('products'=>$productsData));
    }
    public function getCreate(Request $req){
        //load category
        $cate = new Category();
        $cateData = $cate->getAllCate();
        return view('admin.products.create',array('cate'=>$cateData));
    }
    public function postCreate(Request $req) {
        $data = $req->all();
        if( !empty($data) ){

            $rules = array(
                'slug' => 'required|min:3|max:50|unique:products',
                'cate_id' => 'required',
                'usage' => 'required|min:3|max:300',
                'description' => 'required|min:3|max:300',
            );
            $validator = Validator::make($data,$rules);
            $files = Input::file('file_upload');
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
                            $destinationPath = public_path($imgPath);
                            $fileName = $file->getClientOriginalName();
                            $fileName = $this->cleanFileName($fileName);
                            $fileName = uniqid() . "_" . $fileName;
                            $upload_success = $file->move($destinationPath,$fileName);
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
                        $products->description =  $data['description'];
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
            $productData = $product->findOrFail($id);

            if( !empty($productData) ){
                $image = json_decode($productData->image);
                $productData->image = $image;

                return view('admin.products.edit',array('product'=>$productData));
            } else {
                return Redirect::route('products.index')->withErrors('Not found Product');
            }
        } else {
            return Redirect::route('products.index')->withErrors('Invalid Product Id');
        }
    }

    private function cleanFileName($fileName)
    {
        //remove blanks
        $fileName = preg_replace('/\s+/', '', $fileName);
        //remove charactes
        $fileName = preg_replace("/[^A-Za-z0-9_-\s.]/", "", $fileName);

        return $fileName;
    }
}
?>