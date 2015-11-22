<?php
namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Technical;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class TechnicalController extends Controller {
    public function __construct(){
        $this->middleware('auth');
    }
    public function index(Request $req) {
        $technical = New Technical();
        $technicalData = $technical->all();
        if( empty($technicalData) ){
            $technicalData = null;
        }
        return view('admin.technical.index',['technical'=>$technicalData]);
    }
    public function getCreate(){
        return view('admin.technical.create');
    }
    public function postCreate(Request $req){
        $data = $req->all();
        if( !empty($data) ){
            $rules = array(
                'name' => 'required|min:3|max:50|unique:technical',
                'url' => 'required|min:3|unique:technical',
            );
            $validator = Validator::make($data,$rules);
            if( $validator->fails() ){
                return Redirect::route('technical.index')->withErrors($validator);
            } else {
                $technical = new Technical($data);
                if( $technical->save() ){
                    return Redirect::route('technical.index')->withMessages('Tạo thông tin kĩ thuật thành công');
                } else {
                    return Redirect::route('technical.index')->withErrors('Đã xảy ra lỗi! thử lại');
                }
            }
        } else {
            return Redirect::route('technical.index')->withErrors('Đã xảy ra lỗi!');
        }
    }
    public function getView(Request $req){
        $id = $req->input('id');
        if( !empty($id) && is_numeric($id) ){
            $technical = New Technical();
            $technicalData = $technical->findOrFail($id);

            if( !empty($technicalData) ){
                return view('admin.technical.view',['technical'=>$technicalData]);
            } else {
                return Redirect::route('technical.index')->withErrors('Không Tìm Thấy Thông Tin');
            }
        } else {
            return Redirect::route('technical.index')->withErrors('Sai mã thông tin kĩ thuật');
        }
    }
    public function getEdit(Request $req){
        $id = $req->input('id');
        if( !empty($id) && is_numeric($id) ){
            $technical = new Technical();
            $technicalData = $technical->findOrFail($id);
            if( !empty($technicalData) ){
                return view('admin.technical.edit',array('data'=>$technicalData));
            } else {
                return Redirect::route('recruitment.index')->withErrors('Không tìm thấy thông tin');
            }
        } else {
            return Redirect::route('recruitment.index')->withErrors('Đã xảy ra lỗi');
        }
    }
    public function postEdit(Request $req){
        $id = $req->input('id');
        $data = $req->all();
        if( !empty($data) ){
            $rules = array(
                'name' => 'required|min:3|max:50|unique:technical',
                'url' => 'required|min:3',
            );
            $validator = Validator::make($data,$rules);
            if( $validator->fails() ){
                return Redirect::route('technical.index')->withErrors($validator);
            } else {
                $technical = new Technical($data);
                $technicalData = $technical->findOrFail($id);
                $technicalData->name = $data['name'];
                $technicalData->url = $data['url'];
                $technicalData->active = $data['active'];
                if( $technicalData->save() ){
                    return Redirect::route('technical.index')->withMessages('Cập Nhật thông tin kĩ thuật thành công');
                } else {
                    return Redirect::route('technical.index')->withErrors('Đã xảy ra lỗi! thử lại');
                }
            }
        } else {
            return Redirect::route('technical.index')->withErrors('Đã xảy ra lỗi!');
        }
    }
    public function delete(Request $req){
        $id = $req->input('id');
        if( !empty($id) && is_numeric($id) ){
            $technical = new Technical();
            $technicalData = $technical->findOrFail($id);
            if( $technicalData->delete() ){
                return Redirect::route('technical.index')->withMessages('Xóa thông tin kĩ thuật thành công');
            } else {
                return Redirect::route('technical.index')->withErrors('Đã xảy ra lỗi! thử lại');
            }
        } else {
            return Redirect::route('technical.index')->withErrors('Đã xảy ra lỗi!');
        }
    }
}
?>