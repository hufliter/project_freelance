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
}
?>