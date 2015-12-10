<?php

namespace App\Http\Controllers;

use App\Products;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Config;

class ProductsController extends Controller
{
    public function index(Request $req){
        $cate = $req->input('cate');
        $item_per_page = Config::get('params_config.item_per_page');
        $page_number = $req->input('page_number');

        $product = new Products();
        if( !empty($cate) && is_numeric($cate) ){
            $productData = $product->where('cate_id','=',$cate)->paginate($item_per_page);
        } else {
            $productData = $product->paginate($item_per_page);
        }

        $imgArr = [];
        foreach($productData as $items){
            $img = json_decode($items->image);
            $items->image = $img[0];
        }
        return view('frontend.products.index',['data'=>$productData]);
    }
    public function view(Request $req){
        $id = $req->input('id');
        if( !empty($id) && is_numeric($id) ){
            $product = new Products();
            $productData = $product->findOrFail($id);
            $productData->image = json_decode($productData->image);
            if( !empty($productData) ){
                
                return view('frontend.products.view',['data'=>$productData]);
            }
        }
    }
    public function search(Request $req){
        $key_word = $req->input('keywords');
        if( !empty($key_word) ) {
            $item_per_page = Config::get('params_config.item_per_page');
            $products = new Products();
            $productsData = $products->where('slug','like','%'.$key_word.'%')->paginate($item_per_page);
            foreach($productsData as $items){
                $img = json_decode($items->image);
                $items->image = $img[0];
            }
            if( !empty($productsData) ) {
                return view('frontend.products.index',['data'=>$productsData]);
            }
        }
    }
}
