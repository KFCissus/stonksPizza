<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PizzaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pizzas = [
            ['id'=> null,'Name'=> ' pepperoni'],
            ['id'=> null,'Name'=>'hawaii'],
            ['id'=> null,'Name'=>'olijf'],
            ['id'=> null,'Name'=>'bacon'],
            ['id'=> null,'Name'=>'4 cheese']

        ];
        DB::table('pizzas')->insert($pizzas);

    }
}
