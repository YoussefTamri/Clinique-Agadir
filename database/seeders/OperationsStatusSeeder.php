<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use App\Models\OpperationStatus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OperationsStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $statusR = [
            ['en'=> 'en cours', 'ar'=> 'قيدالمعالجة'],
            ['en'=> 'done', 'ar'=> 'تام'],
            ['en'=> 'soon', 'ar'=> 'قريبا'],





        ];
        foreach ($statusR as $statu) {
            OpperationStatus::create(['Name' => $statu]);
        }
    }
}
