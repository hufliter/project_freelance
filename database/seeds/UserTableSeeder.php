<?php

class UserTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->delete();

        User::create(array(
            'username'     => 'admin',
            'firstname' => 'Super',
            'lastname' => 'User',
            'email'    => 'finalfantasy812@gmail.com',
            'password' => Hash::make('newpass2015'),
            'role' => '1',
            'is_active' => '1',
        ));
    }
}