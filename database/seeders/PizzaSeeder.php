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
            ['id'=> null,'Name'=> ' pepperoni','ingredients'=>'?'],
            ['id'=> null,'Name'=>'hawaii','ingredients'=>'?'],
            ['id'=> null,'Name'=>'olijf','ingredients'=>'?'],
            ['id'=> null,'Name'=>'bacon','ingredients'=>'?'],
            ['id'=> null,'Name'=>'4 cheese','ingredients'=>'?']

        ];
        DB::table('pizzas')->insert($pizzas);

    }
}
