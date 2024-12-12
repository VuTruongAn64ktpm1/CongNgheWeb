<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SalesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
{
    DB::table('sales')->insert([
        ['medicine_id' => 1, 
        'quantity' => 10, 
        'sale_date' => '2023-01-01 10:00:00', 
        'customer_phone' => '0912345678'],        
    ]);
}

}
