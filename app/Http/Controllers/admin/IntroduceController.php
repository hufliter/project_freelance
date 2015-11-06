<?php
namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Introduce;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class IntroduceController extends Controller {
    public function __construct(){
        $this->middleware('auth');
    }
    public function index(Request $req){
        $intro = new Introduce();
        $introData = $intro->findAllIntroduce();
        return view('admin.introduce.index',array('data'=>$introData));
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
    public function view(Request $req) {
        $id = $req->input('id');
        if( !empty($id) && is_numeric($id) ) {
            $intro = new Introduce();
            $introData = $intro->findOrFail($id);

            if( !empty($introData) ) {
                return view('admin.introduce.view',array('data'=>$introData));
            } else {
                return view('admin.introduce.index');
            }
        } else {
            return view('admin.introduce.index')->withErrors('Invalid Introduce Id');
        }
    }

    public function getEdit(Request $req){
        $id = $req->input('id');
        if( !empty($id) && is_numeric($id) ) {
            $intro = new Introduce();
            $introData = $intro->findOrFail($id);
            $temp = base64_decode($introData->content);
            $introData->content = $temp;
            if( !empty($introData) ) {
                return view('admin.introduce.edit',array('introData'=>$introData));
            } else {
                return view('admin.introduce.index');
            }
        } else {
            return view('admin.introduce.index')->withErrors('Invalid Intro Id');
        }
    }

    public function postEdit(Request $req)
    {
        $id = $req->input('id');
        if (!empty($id) && is_numeric($id)) {
            $rules = array(
                'title' => 'required|min:3|max:150',
                'content' => 'required|min:5',
                'is_active' => 'required'
            );
            $validator = Validator::make($req->all(), $rules);
            if ($validator->fails()) {
                $messages = $validator->messages();
                return Redirect::route('intro')->withErrors($messages);
            } else {
                $intro = new Introduce();
                $introData = $intro->find($id);
                $introData->title = $req->input('title');
                $introData->content = base64_encode($req->input('content'));
                $introData->is_active = $req->input('is_active');

                if ($introData->save()) {
                    return Redirect::route('intro')->withMessages('Edit Introduce Successful');
                } else {
                    return Redirect::route('intro')->withErrors('Something went wrong');
                }
            }
        } else {
            return Redirect::route('intro')->withErrors('Invalid Introduce Id');
        }
    }
}
?>