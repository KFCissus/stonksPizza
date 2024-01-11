<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PizzaSizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    $pizzasizes=[
        ['id'=>null,'size'=>'small','baseprice'=>2],
        ['id'=>null,'size'=>'medium','baseprice'=>3],
        ['id'=>null,'size'=>'large','baseprice'=>4]
    ];

        DB::table('pizzasize')->insert($pizzasizes);
    }
}
