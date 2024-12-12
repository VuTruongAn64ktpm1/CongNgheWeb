<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('students')->insert([

            [
                'first_name' => 'Jane',
                'last_name' => 'Smith',
                'date_of_birth' => '2016-05-10',
                'parent_phone' => '0987654321',
                'class_id' => 2,
            ],
            // Thêm dữ liệu minh họa khác ở đây
        ]);
    }
    
}
