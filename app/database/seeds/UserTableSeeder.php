<?php
class UserTableSeeder extends Seeder{
    public function run(){
        $users = [
            ['name' => 'admin', 'fullname' => 'nguyen ngoc binh', 'email'=>'nnbinh0301@gmail.com','password'=>'121212'],
            ['name' => 'tthoc', 'fullname' => 'tran thai hoc', 'email'=>'tthaihoc@gmail.com ','password'=>'121212'],
            ['name' => 'nnbinh', 'fullname' => 'binh nguyen ngoc', 'email'=>'nnbinh1991@gmail.com','password'=>'121212'],
        ];

        DB::table('users')->insert($users);
    }
}
