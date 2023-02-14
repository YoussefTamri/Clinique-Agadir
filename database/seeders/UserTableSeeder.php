<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'you3tam@outlook.fr',
            'password' => Hash::make('Admin@cliniqueAgadir2023'),
            'is_admin' => 1,

        ]);


    }





}
