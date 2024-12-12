<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MedicinesTableSeeder extends Seeder
{
    
    public function run()
    {
        DB::table('medicines')->insert([
            ['name' => 'Paracetamol', 
            'brand' => 'XYZ', 
            'dosage' => '500mg', 
            'form' => 'Tablet', 
            'price' => 1.00, 
            'stock' => 100],

            ['name' => 'Ibuprofen', 
            'brand' => 'ABC', 
            'dosage' => '200mg', 
            'form' => 'Capsule', 
            'price' => 0.50, 
            'stock' => 200],
        ]);
    }
}
