<?php

namespace App\Http\Controllers;

use App\Technical;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Config;

class TechnicalController extends Controller
{
    public function index(Request $req){
        $technical = new Technical();
        $itemPerPage = Config::get('params_config.item_per_page');
        $pageNumber = $req->input('page_number');
        $technicalData = $technical->paginate($itemPerPage);

        if( empty($technicalData) ){
            $technicalData = null;
        }
        return view('frontend.technical.index',['data'=>$technicalData]);
    }
}
