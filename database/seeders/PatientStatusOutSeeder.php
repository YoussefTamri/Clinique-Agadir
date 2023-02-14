<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use App\Models\PatientStatus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PatientStatusOutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {






        $status= new PatientStatus();

        $status->Name =    ['en'=> 'leave hopital', 'ar'=> 'غادر المستشفى'];
        $status->is_on = 0;

        $status-> save();


    }
}
