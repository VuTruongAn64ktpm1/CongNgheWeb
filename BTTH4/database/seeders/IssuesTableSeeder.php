<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Issue;
class IssuesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 50; $i++) {
           Issue::create([
          'computer_id' => $faker->numberBetween(1, 50), 
          'reported_by' => $faker->name, 
          'reported_date' => $faker->dateTimeThisYear(), 
          'description' => $faker->text, 
          'urgency' => $faker->randomElement(['Low', 'Medium', 'High']), 
          'status' => $faker->randomElement(['Open', 'In Progress', 'Resolved']), 
           ]);
           echo "Seeded computers successfully.\n";
    }
    }
}
