<?php
namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;

class IntroduceController extends Controller {
    public function __construct(){
        $this->middleware('auth');
    }
    public function index(Request $req){
        return view('admin.introduce.index');
    }
    public function getCreate(){
        return view('admin.introduce.create');
    }
    public function postCreate(Request $req){
        var_dump($req->input());
        exit();
    }
}
?>