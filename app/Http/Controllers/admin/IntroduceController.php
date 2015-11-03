<?php
namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Introduce;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;

class IntroduceController extends Controller {
    public function __construct(){
        $this->middleware('auth');
    }
    public function index(Request $req){
        $intro = new Introduce();
        $introData = $intro->findAllIntroduce();
        var_dump($introData);
        exit();
        return view('admin.introduce.index');
    }
    public function getCreate(){
        return view('admin.introduce.create');
    }
    public function postCreate(Request $req){
        $data = $req->input();
        if( !empty($data) ) {
            $dataContent = strip_tags($data['content']);
            $encodedDataContent = base64_encode($dataContent);
            $data['content'] = $encodedDataContent;
            $intro = new Introduce($data);
            if( $intro->save() ) {
                return Redirect::route('intro')->withMessages('Create Introduce Successful');
            } else {
                return Redirect::route('intro')->withErrors('Something Went wrong');
            }
        } else {
            return Redirect::to('/admin/intro')->withErrors('Something went wrong');
        }
    }
}
?>