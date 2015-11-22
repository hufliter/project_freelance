<?php

namespace App\Http\Controllers;

use App\Technical;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class TechnicalController extends Controller
{
    public function index(){
        $technical = new Technical();
        $technicalData = $technical->all();

        if( empty($technicalData) ){
            $technicalData = null;
        }
        return view('frontend.technical.index',['data'=>$technicalData]);
    }
}
