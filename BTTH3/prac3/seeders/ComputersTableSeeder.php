<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ComputersTableSeeder extends Seeder
{
    public function run()
{
    DB::table('computers')->insert([
        [
            'computer_name' => 'Lab1-PCB5',
            'model' => 'Dell Optiplex 7090',
            'operating_system' => 'Windows 10 Pro',
            'processor' => 'Intel Core i5-11400',
            'memory' => 16,
            'available' => true,
        ],

    ]);
}

}
