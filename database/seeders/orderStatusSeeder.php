<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class orderStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pizzastatus=[
            ['id'=>null,'status'=>'initieel'],
            ['id'=>null,'status'=>'betaald'],
            ['id'=>null,'status'=>'bereiden'],
            ['id'=>null,'status'=>'in de oven'],
            ['id'=>null,'status'=>'onderweg'],
            ['id'=>null,'status'=>'bezorgd']

        ];
        DB::table('OrderStatus')->insert($pizzastatus);
    }
}
