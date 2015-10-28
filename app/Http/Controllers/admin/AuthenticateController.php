<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AuthenticateController extends Controller
{
    public function __construct(){}
    public function login(Request $req) {
        return view('admin.login');
    }
    public function auth(Request $req){
        var_dump($req);
        exit();
    }
    public function logout(Request $req){}
}
