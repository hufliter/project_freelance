<?php namespace App\Services;

use App\User;
use Validator;
use Illuminate\Contracts\Auth\Registrar as RegistrarContract;

class Registrar implements RegistrarContract {
    public function validator(array $data)
    {
        return Validator::make($data, [
            'username' => 'required|min:3|max:50',
            'firstname' => 'required|min:3|max:50',
            'lastname' => 'required|min:3|max:50',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
            'role' => 'required',
            'is_active' => 'required',
        ]);
    }

    public function create(array $data){
        return User::create([
            'username' => $data['username'],
            'firstname' => $data['firstname'],
            'lastname' => $data['lastname'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'role' => $data['role'],
            'is_active' => $data['is_active'],
        ]);
    }
}

?>