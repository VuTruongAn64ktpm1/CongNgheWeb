<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Computer;

class ComputersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 50; $i++) {
           Computer::create([
          'computer_name' => $faker->bothify('Lab##-PC##'), 
          'model' => $faker->randomElement(['Dell Optiplex 7090', 'HP EliteDesk 800', 'Apple iMac']), 
          'operating_system' => $faker->randomElement(['Windows 10 Pro', 'Ubuntu 20.04', 'macOS Monterey']), 
          'processor' => $faker->randomElement(['Intel Core i5-11400', 'AMD Ryzen 5 3600', 'Apple M1']), 
          'memory' => $faker->randomElement([8, 16, 32]), 
          'available' => $faker->boolean(),  
           ]);
           echo "Seeded computers successfully.\n";
    }
    }
}
