<?php

namespace Database\Seeders;

use App\Models\payment;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaymenNottSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $payment= new payment();

        $payment->Name =   ['en'=> 'Still not paid', 'ar'=> 'لازال لم يتم الدفع'];
        $payment->is_paid = 0;

        $payment-> save();





    }

}

