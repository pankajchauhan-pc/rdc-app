<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class Users_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'first_name'=>'Herry',
            'last_name'=>'Chauhan',
            'username'=>'herry',
            'password'=>Hash::make("123"),
            'email'=>'chauhan.pankaj446@gmail.com',
        ]);
    }
}
