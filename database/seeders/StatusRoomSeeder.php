<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use App\Models\Status;
use App\Models\statusrooom;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatusRoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $statusR = [
            ['en'=> 'is Empty', 'ar'=> 'فارغ'],
            ['en'=> 'is Full', 'ar'=> 'ممتلئ'],
            ['en'=> 'in Maintenance', 'ar'=> 'في الصيانة'],




        ];
        foreach ($statusR as $statu) {
            statusrooom::create(['Name' => $statu]);
        }
    }
}
