<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        DB::table('users')->delete();
        DB::table('users')->insert([
            'name' => 'Super Admin',
            'email' => 'yousseftam100@gmail.com',
            'password' => Hash::make('SuperAdmin@cliniqueAgadir2023'),
            'is_super' => 1,

        ]);


    }


}
