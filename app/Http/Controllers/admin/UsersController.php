<?php
namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Validator;

class UsersController extends Controller {
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(Request $req){
        $user = new User();
        $userData = $user->findAllUsers();
        return view('admin.users.index', ['userData'=>$userData]);
    }

    public function getView(Request $req){
        $id = $req->input('id');
        if( !empty($id) && is_numeric($id) ){
            $userId = $id;
            $user = new User();
            $userData = $user->findUserById($userId);

            if( !empty($userData) ) {
                return view('admin.users.view',['userData'=>$userData]);
            } else {
                return redirect()->route('/admin');
            }
        } else {
            return redirect()->route('/admin');
        }
    }

    public function getEdit(Request $req){
        $id = $req->input('id');
        if( !empty($id) && is_numeric($id) ){
            $userId = $id;
            $user = new User();
            $userData = $user->find($userId);
            if( !empty($userData) ) {
                return view('admin.users.edit',['userData'=>$userData]);
            } else {
                return redirect()->route('/admin');
            }
        } else {
            return redirect()->route('/admin');
        }
    }

    public function postEdit(Request $req){
        var_dump($req->input());
        //create a validator
        $validateor = Validator::make([
            'firstname' => 'required|min:3|max:50',
            'lastname' => 'required|min:3|max:50',
            'email' => 'required|email|unique:users'
        ]);
        exit();
    }

    public function getDelete(Request $req) {
        $id = $req->input('id');
        if( !empty($id) && is_numeric($id) ){
            $userId = $id;
        }
        return view('admin.users.delete',['user_id'=>$userId]);
    }
}
?>