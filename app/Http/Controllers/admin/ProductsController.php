<?php
namespace App\Http\Controllers\admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\Products;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
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
                'fileUpload' => 'required|mimes:png'
            );
            $validator = Validator::make($data,$rules);
            if( $validator->fails() ){
                return Redirect::route('products.index')->withErrors($validator);
            } else {
                var_dump($data);exit();
            }
        }
    }
}
?>