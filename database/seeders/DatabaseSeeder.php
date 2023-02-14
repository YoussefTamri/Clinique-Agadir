<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {


        $this->call(GenderTableSedder::class);
        $this->call(invoiceSeeder::class);
        $this->call(OperationsStatusSeeder::class);
        $this->call(PatientStatusSeeder::class);
        $this->call(PatientStatusOutSeeder::class);
        $this->call(PaymentSeeder::class);
        $this->call(PaymenNottSeeder::class);


        $this->call(StatusRoomSeeder::class);
        $this->call(StatusTableSeeder::class);
        $this->call(AdminsTableSeeder::class);


        $this->call(UserTableSeeder::class);

    }
}
