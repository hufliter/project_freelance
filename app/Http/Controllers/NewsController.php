<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use willvincent\Feeds\Facades\FeedsFacade as Feeds;

class NewsController extends Controller
{
    public function index(){
        $feed = Feeds::make(['http://vnexpress.net/rss/kinh-doanh.rss','http://vnexpress.net/rss/the-gioi.rss']
        , 2);
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
        /*$titCount = count($realTit);*/

        $realDesc = array();
        foreach ($desc as $dec) {
            foreach($dec as $d){
                array_push($realDesc, $d['data']);
            }
        }
        $dataResult = array_combine($realTit, $realDesc);

        return view('frontend.news.index',['data'=>$dataResult]);
    }
}
