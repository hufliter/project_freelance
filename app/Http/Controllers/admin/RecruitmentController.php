<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class RecruitmentController extends Controller
{
    public function __construct(){
        return $this->middleware('auth');
    }
    public function index(){
        return view('admin.recruitment.index');
    }
}
