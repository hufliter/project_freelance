<?php

namespace App\Http\Controllers;

use App\Products;
use App\Introduce;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\View;
use willvincent\Feeds\Facades\FeedsFacade as Feeds;

class SiteController extends Controller
{
    public function index(){

        /*$products = new Products();
        $productsData = $products->all()->take(4);
        if( empty($productsData) ){
            $productsData = null;
        }

        foreach($productsData as $items){
            $img = json_decode($items->image);
            $items->image = $img[0];
        }
        ,['products'=>$productsData]*/
        $intro = new Introduce();
        $introData = $intro->findAllIntroduce();

        $cate = new Category();
        $cateData = $cate->all();
        if( !empty( $cateData ) ){
            foreach ($cateData as $i) {
                $cateLowerCase = strtolower($i->name);
                $cleanCateData = str_replace(' ', '-', $cateLowerCase);
                $i->filter_cate_name = $cleanCateData;
            }
        } else {
            $cateData = '';
        }
        
        //produce
        $product = new Products();
        $productData = $product->findAllProducts();
        if( !empty($productData) ) {
            foreach ($productData as $items) {
                $img = json_decode($items->image);
                $items->image = $img[0];
                $toLowerCase = strtolower($items->cate_name);
                $cleanData = str_replace(' ', '-', $toLowerCase);
                $items->filter_name = $cleanData;
            }
        } else {
            $productData = '';
        }
        return view('frontend.home.index',[
            'introduce'=>$introData[0],
            'category'=>$cateData,
            'product' => $productData
        ]);
    }
}
