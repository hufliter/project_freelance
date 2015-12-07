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
        $cateDate = $cate->all();
        
        return view('frontend.home.index',[
            'introduce'=>$introData[0],
            'category'=>$cateDate
        ]);
    }

}
