<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $customers =[
            [
                'id' => null,
                'first_name' => 'John',
                'last_name' => 'Doe',
                'address' => '123 Main St',
                'phone' => '555-1234',
                'zipcode' => '12345',
                'city' => 'Example City',
                'pizza_points' => 100,
                'created_at' => '2024-01-10 12:00:00',
                'updated_at' => '2024-01-10 12:00:00',
            ],
            [
                'id' => null,
                'first_name' => 'Jane',
                'last_name' => 'Smith',
                'address' => '456 Oak Ave',
                'phone' => '555-5678',
                'zipcode' => '54321',
                'city' => 'Sample Town',
                'pizza_points' => 50,
                'created_at' => '2024-01-10 12:30:00',
                'updated_at' => '2024-01-10 12:30:00',

            ]

        ];
        DB::table('customers')->insert($customers);
    }
}
