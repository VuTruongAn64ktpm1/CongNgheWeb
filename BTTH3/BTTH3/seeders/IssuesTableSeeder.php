<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class IssuesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('issues')->insert([
            [
                'computer_id' => 1,
                'reported_by' => 'John Doe',
                'reported_date' => now(),
                'description' => 'Screen flickering issue.',
                'urgency' => 'Medium',
                'status' => 'Open',
            ],
            [
                'computer_id' => 2,
                'reported_by' => 'Jane Smith',
                'reported_date' => now(),
                'description' => 'System overheating.',
                'urgency' => 'High',
                'status' => 'In Progress',
            ],
            // Thêm dữ liệu minh họa khác ở đây
        ]);
    }
    
}
