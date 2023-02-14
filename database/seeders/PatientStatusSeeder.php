<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use App\Models\PatientStatus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PatientStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {




        DB::table('patient_statuses')->delete();

        $status= new PatientStatus();

        $status->Name =    ['en'=> 'on hopital', 'ar'=> 'لازال في المستشفى'];
        $status->is_on = 1;

        $status-> save();




    }
}
