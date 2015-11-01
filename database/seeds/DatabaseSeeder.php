<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*Model::unguard();

         $this->call(UserTableSeeder::class);

        Model::reguard();*/
        /*DB::table('users')->insert([
            'username'     => 'tester01',
            'firstname' => 'Test',
            'lastname' => 'Man',
            'email'    => 'abcd@gmail.com',
            'password' => Hash::make('newpass2015'),
            'role' => '2',
            'is_active' => '1',
        ]);

        DB::table('users')->insert([
            'username'     => 'tester06',
            'firstname' => 'Test',
            'lastname' => 'Man',
            'email'    => 'abcde123@gmail.com',
            'password' => Hash::make('newpass2015'),
            'role' => '2',
            'is_active' => '3',
        ]);
        DB::table('users')->insert([
            'username'     => 'tester07',
            'firstname' => 'Test',
            'lastname' => 'Man',
            'email'    => 'abcdef123@gmail.com',
            'password' => Hash::make('newpass2015'),
            'role' => '2',
            'is_active' => '3',
        ]);
        DB::table('users')->insert([
            'username'     => 'tester08',
            'firstname' => 'Test',
            'lastname' => 'Man',
            'email'    => 'abcefgd123@gmail.com',
            'password' => Hash::make('newpass2015'),
            'role' => '2',
            'is_active' => '2',
        ]);
        DB::table('users')->insert([
            'username'     => 'tester09',
            'firstname' => 'Test',
            'lastname' => 'Man',
            'email'    => 'abcdefgh123@gmail.com',
            'password' => Hash::make('newpass2015'),
            'role' => '2',
            'is_active' => '1',
        ]);*/
    }
}
