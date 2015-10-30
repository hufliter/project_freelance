<?php

class UserTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->delete();

        User::create(array(
            'username'     => 'tester',
            'firstname' => 'Test',
            'lastname' => 'Man',
            'email'    => 'abc@gmail.com',
            'password' => Hash::make('newpass2015'),
            'role' => '2',
            'is_active' => '1',
        ));
    }
}