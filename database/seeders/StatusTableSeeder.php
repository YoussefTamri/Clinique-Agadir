<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Status;

class StatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $status = [
            ['en'=> 'en cours', 'ar'=> 'قيد المعالجة'],
            ['en'=> 'done', 'ar'=> 'تام'],
            ['en'=> 'new', 'ar'=> ' حديث'],


        ];
        foreach ($status as $statu) {
            Status::create(['Name' => $statu]);
        }
    }
}
