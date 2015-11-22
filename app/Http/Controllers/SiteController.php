<?php

namespace App\Http\Controllers;

use App\Products;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\View;
use willvincent\Feeds\Facades\FeedsFacade as Feeds;

class SiteController extends Controller
{
    public function index(){
        /*$feed = Feeds::make('http://vnexpress.net/rss/kinh-doanh.rss'
        , 5);
        $data = $feed->get_items();
        var_dump($data[0]->data);
        exit();*/
        $products = new Products();
        $productsData = $products->all()->take(4);
        if( empty($productsData) ){
            $productsData = null;
        }
        $imgArr = [];
        foreach($productsData as $items){
            $img = json_decode($items->image);
            $items->image = $img[0];
        }

        return view('frontend.home.index',['products'=>$productsData]);
    }

}
