<?php

namespace App\Http\Controllers\admin;

use App\Recruitment;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class RecruitmentController extends Controller
{
    public function __construct(){
        return $this->middleware('auth');
    }
    public function index(){
        $recruitment = new Recruitment();
        $recruitmentData = $recruitment->all();
        if( empty($recruitmentData) ){
            $recruitmentData = null;
        }
        return view('admin.recruitment.index', ['data'=>$recruitmentData] );
    }
    public function getCreate(){
    	return view('admin.recruitment.create');
    }
    public function postCreate(Request $req){
		$data = $req->all();
        if( !empty($data) ){
            $rules = array(
                'job_title' => 'required|min:3|max:150',
                'position' => 'required|min:3|max:150',
                'quantity' => 'required',
                'salary' => 'required',
                'requirement' => 'required',
                'description' => 'required',
                'contact' => 'required',
                'active' => 'required'
            );
            $validator = Validator::make($data, $rules);
            if( $validator->fails() ){
                return Redirect::route('recruitment.index')->withErrors($validator);
            } else {
                $recruitment = new Recruitment($data);
                if( $recruitment->save() ){
                    return Redirect::route('recruitment.index')->withMessages('Tạo Tin tuyển dụng thành công');
                } else {
                    return Redirect::route('recruitment.index')->withErrors('Lỗi! Thử lại');
                }
            }
        } else {
            return Redirect::route('recruitment.index')->withErrors('Đã xảy ra lỗi');
        }
    }
    public function getView(Request $req){
        $id = $req->input('id');
        if( !empty($id) && is_numeric($id) ) {
            $recruitment = new Recruitment();
            $recruitmentData = $recruitment->findOrFail($id);

            if( !empty($recruitmentData) ){
                return view('admin.recruitment.view',['data'=>$recruitmentData]);
            } else {
                return Redirect::route('recruitment.index')->withErrors('Không tìm thấy thông tin');
            }
        } else {
            return Redirect::route('recruitment.index')->withErrors('Đã xảy ra lỗi');
        }
    }
    public function getEdit(Request $req){
        $id = $req->input('id');
        if( !empty($id) && is_numeric($id) ){
            $recruitment = new Recruitment();
            $recruitmentData = $recruitment->findOrFail($id);
            if( !empty($recruitmentData) ){
                return view('admin.recruitment.edit',array('data'=>$recruitmentData));
            } else {
                return Redirect::route('recruitment.index')->withErrors('Không tìm thấy thông tin');
            }
        } else {
            return Redirect::route('recruitment.index')->withErrors('Đã xảy ra lỗi');
        }
    }
    public function postEdit(Request $req){
        $id = $req->input('id');
        if( !empty($id) && is_numeric($id) ){
            $rules = array(
                'job_title' => 'required|min:3|max:150',
                'position' => 'required|min:3|max:150',
                'quantity' => 'required',
                'salary' => 'required',
                'requirement' => 'required',
                'description' => 'required',
                'contact' => 'required',
                'active' => 'required'
            );
            $validator = Validator::make($req->all(), $rules);
            if( $validator->fails() ){
                return Redirect::route('recruitment.index')->withErrors($validator);
            } else {
                $data = $req->all();
                $recruitment = new Recruitment();
                $recruitmentData = $recruitment->find($id);
                $recruitmentData->job_title = $data['job_title'];
                $recruitmentData->position = $data['position'];
                $recruitmentData->salary = $data['salary'];
                $recruitmentData->quantity = $data['quantity'];
                $recruitmentData->requirement = $data['requirement'];
                $recruitmentData->description = $data['description'];
                $recruitmentData->contact = $data['contact'];
                $recruitmentData->active= $data['active'];
                if( $recruitmentData->save() ){
                    return Redirect::route('recruitment.index')->withMessages('Cập Nhật tuyển dụng thành công');
                } else {
                    return Redirect::route('recruitment.index')->withErrors('Lỗi! Thử lại');
                }
            }
        } else {
            return Redirect::route('recruitment.index')->withErrors('Đã xảy ra lỗi');
        }
    }
    public function delete(Request $req){
        $id = $req->input('id');
        if( !empty($id) && is_numeric($id) ){
            $recruitment = new Recruitment();
            $recruitmentData = $recruitment->findOrFail($id);
            if( $recruitmentData->delete() ){
                return Redirect::route('recruitment.index')->withMessages('Xóa Thông tin thành công');
            } else {
                return Redirect::route('recruitment.index')->withErrors('Đã xảy ra lỗi');
            }
        } else {
            return Redirect::route('recruitment.index')->withErrors('Sai mã thông tin');
        }
    }
}
