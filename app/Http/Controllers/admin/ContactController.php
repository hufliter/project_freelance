<?php
namespace App\Http\Controllers\admin;

use App\Contact;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;

class ContactController extends Controller {
    public function __construct(){
        $this->middleware('auth');
    }
    public function index(Request $req) {
        $contact = new Contact();
        $contactData = $contact->all();
        return view('admin.contact.index',['contacts'=>$contactData]);
    }
    public function getView(Request $req){
        $id = $req->input('id');
        if( !empty($id) && is_numeric($id) ){
            $contact = new Contact();
            $contactData = $contact->findOrFail($id);
            if( !empty($contactData) ) {
                return view('admin.contact.view',['contactData'=>$contactData]);
            } else {
                return view('admin.contact.index')->withErrors('Không Tìm thấy dữ liệu');
            }
        } else {
            return view('admin.contact.index')->withErrors('Sai mã liên hệ');
        }
    }
    /*public function getEdit(Request $req){
        return view('admin.contact.edit');
    }
    public function postEdit(Request $req){

    }*/
    public function delete(Request $req){
        $id = $req->input('id');
        if( !empty($id) && is_numeric($id) ){
            $contact = new Contact();
            $contactData = $contact->findOrFail($id);

            if( $contactData->delete() ){
                return view('admin.contact.index')->withMessages('Xóa Thông tin liên hệ thành công');
            } else {
                return view('admin.contact.index')->withErrors('Đã xảy ra lỗi! thử lại');
            }
        } else {
            return view('admin.contact.index')->withErrors('Sai mã liên hệ');
        }
    }
}
?>