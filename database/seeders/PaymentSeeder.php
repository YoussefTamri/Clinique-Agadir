<?php

namespace Database\Seeders;

use App\Models\payment;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('payments')->delete();

        $payment= new payment();

        $payment->Name =   ['en'=> 'paid', 'ar'=> 'تم الدفع'];
        $payment->is_paid = 1;

        $payment-> save();


    }


}

