<?php

namespace App\Http\Controllers\admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function __construct(){
        $this->middleware('auth',['except'=> ['getLogin','postLogin']]);
    }
    public function index(Request $req){
        return view('admin.layout.index');
    }
    public function getLogin(Request $req) {
        return view('admin.auth.login');
    }
    public function postLogin(Request $req){
        $username = $req->input('username') ? $req->input('username'): '';
        $password = $req->input('password') ? $req->input('password'): '';

        if( !empty($username) && !empty($password) ) {
            $rules = array(
                'username' => 'required|min:3|max:50',
                'password' => 'required|min:6',
            );
            $data = $req->all();
            $validator = Validator::make($data,$rules);
            if( $validator->fails() ){
                return Redirect::to('/admin/login')->withMessage('Username or Password is invalid');
            } else {
                $userData = array(
                    'username' => $username,
                    'password' => $password
                );
                if( Auth::validate($userData) ){
                    if( Auth::attempt($userData) ){
                        //check roles
                        $user = new User();
                        $userData = $user->getRoleByUserData($userData);
                        if( !empty($userData) ){
                            var_dump($userData[0]->role);
                            if( $userData[0]->role == 1 ) {
                                return Redirect::to('admin/')->withMessage('Login Successful, Welcome Admin CP');
                            } else {
                                return Redirect::to('admin/login')->withMessage('You can not access to Authorized Area!');
                            }
                        } else {
                            return Redirect::to('admin/login')->withMessage('You can not access to Authorized Area!');
                        }
                    }
                } else {
                    Session::flash('error','Something went wrong');
                    return Redirect::to('/admin/login');
                }
            }
        }
    }
    public function logout(Request $req){
        Auth::logout();
        return Redirect::to('/admin/login');
    }
}
