<?php

use Illuminate\Database\Seeder;
//use DB;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data =[
            ['email'=>'bach@gmail.com', 'password'=>bcrypt('123456'), 'level'=>1],
            ['email'=>'long@gmail.com', 'password'=>bcrypt('123456'), 'level'=>2],
            ['email'=>'linh@gmail.com', 'password'=>bcrypt('123456'), 'level'=>2],
            ['email'=>'nam@gmail.com', 'password'=>bcrypt('123456'), 'level'=>2],
        ];
        DB::table('vp_users')->insert($data);
    }
}
