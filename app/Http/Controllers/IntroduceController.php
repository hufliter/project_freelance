<?php

namespace App\Http\Controllers;

use App\Introduce;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class IntroduceController extends Controller
{
    public function index(){
        $introduce = new Introduce();
        $introduceData = $introduce->all();
        return view('frontend.introduce.index',['data'=>$introduceData[0]]);
    }
}
