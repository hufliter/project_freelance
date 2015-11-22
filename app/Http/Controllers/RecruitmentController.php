<?php

namespace App\Http\Controllers;

use App\Recruitment;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class RecruitmentController extends Controller
{
    public function index(){
        $recruitment = new Recruitment();
        $recruitmentData = $recruitment->all();
        if( empty($recruitmentData) ){
            $recruitmentData = null;
        }
        return view('frontend.recruitment.index',['data'=>$recruitmentData]);
    }
    public function view(Request $req){
        $id = $req->input('id');
        if( !empty($id) && is_numeric($id) ){
            $recruitment = new Recruitment();
            $recruitmentData = $recruitment->findOrFail($id);

            if( !empty($recruitmentData) ){
                return view('frontend.recruitment.view',['data'=>$recruitmentData]);
            }
        }
    }
}
