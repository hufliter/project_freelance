<?php

namespace App\Http\Controllers;

use App\Products;
use App\Introduce;
use App\Category;
use App\Technical;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\View;
use willvincent\Feeds\Facades\FeedsFacade as Feeds;

class SiteController extends Controller
{
    public function index(){

        $intro = new Introduce();
        $introData = $intro->findAllIntroduce();

        $cate = new Category();
        $cateData = $cate->orderBy('id','desc')->get();
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


        //feed get news
        $feed = Feeds::make(['http://vnexpress.net/rss/kinh-doanh.rss','http://vnexpress.net/rss/the-gioi.rss']
        , 3);
        $data = $feed->get_items();
        $titleArr = array();
        $desc = array();
        foreach($data as $items){
            $expressData =$items->data;
            $childData = $expressData['child'][""];
            array_push($titleArr,$childData['title']);
            array_push($desc,$childData['description']);
        }
        $realTit = array();
        foreach ($titleArr as $tit) {
            foreach ($tit as $tt) {
                array_push($realTit, $tt['data']);
            }
        }

        $realDesc = array();
        foreach ($desc as $dec) {
            foreach($dec as $d){
                $temp = [];
                //should write a function to separate content , image, title
                $strPos1 = strpos( $d['data'] , 'http');
                $strPos2 = strpos( $d['data'], '<img');
                $linkNews = substr($d['data'], $strPos1, $strPos2);
                $linkNews = str_replace('">', '', $linkNews);
                $linksArr = explode("<img", $linkNews);

                $imgPos1 = strpos($d['data'], 'http://img');
                $imgPos2 = strpos($d['data'], "</br>");
                $imgNews = substr($d['data'], $imgPos1 ,$imgPos2);
                $imgNews = str_replace('</br>', '', $imgNews);
                $imgArr = explode('" ></a>', $imgNews);
                $temp['img'] = $imgArr[0];
                $temp['content'] = $imgArr[0];
                $temp['link'] = $linksArr[0];
                array_push($realDesc, $temp);
            }
        }
        $newsFeed = array_combine($realTit, $realDesc);


        //get technical link
        $technical = New Technical();
        $technicalData = $technical->all();
        if( empty($technicalData) ) {
            $technicalData = '';
        }
        return view('frontend.home.index',[
            'introduce'=>$introData[0],
            'category'=>$cateData,
            'product' => $productData,
            'news' => $newsFeed,
            'technical' => $technicalData,
        ]);
    }
}
