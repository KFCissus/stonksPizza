<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(CustomerSeeder::class);
        $this->call(ingredient_table::class);
        $this->call(orderStatusSeeder::class);
        $this->call(PizzaSeeder::class);
        $this->call(PizzaSizeSeeder::class);

    }
}
