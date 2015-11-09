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
                'parent_id' => 'required',
                'usage' => 'required|min:3|max:300',
                'description' => 'required|min:3|max:300',
            );
            $validator = Validator::make($data,$rules);
            if( $validator->fails() ){
                return Redirect::route('products.index')->withErrors($validator);
            } else {
                if( $req->hasFile('fileUpload') ) {
                    $files = Input::file('fileUpload');
                    $file_count = count($files);
                    $uploadCount = 0;
                    foreach($files as $file){
                        $imgRules = array(
                            'fileUpload' => 'required|mimes:png,gif,jpeg'
                        );
                        $imgValidator = Validator::make(array('fileUpload'=>$file),$imgRules);
                        if( $imgValidator->fails() ){
                            return Redirect::route('products.index')->withErrors($imgValidator);
                        } else {
                            $imgPath = 'upload/img';
                            $destinationPath = public_path($imgPath);
                            $fileName = $file->getClientOriginalName();
                            $upload_success = $file->move($destinationPath,$fileName);
                            $uploadCount++;
                        }
                    }
                    //xu ly phan save db + hinh anh.
                    if( $uploadCount == $file_count ) {
                        return Redirect::route('products.index')->withMessages('Create Product Successful');
                    } else {
                        return Redirect::route('products.index')->withErrors('Something went wrong');
                    }
                }
            }
        }
    }
}
?>