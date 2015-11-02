<?php
namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
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
                return redirect()->route('users.index');
            }
        } else {
            return redirect()->route('users.index');
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
                return redirect()->route('users.index');
            }
        } else {
            return redirect()->route('users.index');
        }
    }

    public function postEdit(Request $req){
        if( is_numeric($req->input('id')) ){
            $userId = $req->input('id');
        }
        //create a controller validate
        $rules = array(
            'id' => 'numeric',
            'firstname' => 'required|min:3|max:50',
            'lastname' => 'required|min:3|max:50',
            'email' => 'required|email',
            'role' => 'required|numeric',
            'password' => 'required',
            're-password' => 'required|same:password',
            'is_active' => 'required|numeric'
        );

        $validator = Validator::make($req->all(), $rules);

        if( $validator->fails() ){
            $messages = $validator->messages();
            return Redirect::to('/admin/users')->withErrors($validator);
        } else {

            $user = new User();
            $userData = $user->find($userId);
            $userData->firstname = $req->input('firstname');
            $userData->lastname = $req->input('lastname');
            $userData->email = $req->input('email');
            $userData->password = Hash::make($req->input('password'));
            $userData->role = $req->input('role');
            $userData->is_active = $req->input('is_active');

            if( $userData->save() ) {
                return Redirect::to('/admin/users')->withMessages('Update User Successful');
            } else {
                return Redirect::to('/admin/users')->withErrors('Something went wrong');
            }
        }
    }

    public function getDelete(Request $req) {
        $id = $req->input('id');
        if( !empty($id) && is_numeric($id) ){
            $userId = $id;
            $user = new User();
            $userData = $user->find($userId);

            if( $userData->delete() ){
                return Redirect::to('/admin/user')->withMessages('Delete User Successful');
            } else {
                return Redirect::to('/admin/user')->withErrors('Something went wrong');
            }
        } else {
            return Redirect::to('/admin/user');
        }
    }
    public function getCreate() {
        return view('admin.users.create');
    }

    public function postCreate(Request $req) {
        if( !empty($req->all()) ) {
            $rules = array(
                'username' => 'required|unique:users',
                'firstname' => 'required|min:3|max:50',
                'lastname' => 'required|min:3|max:50',
                'email' => 'required|email|unique:users',
                'role' => 'required|numeric',
                'password' => 'required',
                're-password' => 'required|same:password',
                'is_active' => 'required|numeric'
            );
            $validator = Validator::make($req->all(),$rules);

            if( $validator->fails() ){
                $messages = $validator->messages();
                return Redirect::route('users.create')->withErrors($validator);
            } else {
                $user = new User();
                $user->username = $req->input('username');
                $user->firstname = $req->input('firstname');
                $user->lastname = $req->input('lastname');
                $user->email = $req->input('email');
                $user->password = $req->input('password');
                $user->role = $req->input('role');
                $user->is_active = $req->input('is_active');

                if( $user->save() ) {
                    return Redirect::to('/admin/users')->withMessages('Create User Successful');
                } else {
                    return Redirect::to('/admin/users')->withErrors('Something went wrong');
                }
            }
        } else {
            return Redirect::to('/admin/users');
        }
    }
}
?>