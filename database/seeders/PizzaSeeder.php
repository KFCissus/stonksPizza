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
            ['id'=> null,'Name'=> ' pepperoni','Prijs'=>'19.99'],
            ['id'=> null,'Name'=>'hawaii','Prijs'=>'19.99'],
            ['id'=> null,'Name'=>'olijf','Prijs'=>'19.99'],
            ['id'=> null,'Name'=>'bacon','Prijs'=>'19.99'],
            ['id'=> null,'Name'=>'4 cheese','Prijs'=>'19.99']

        ];
        DB::table('pizzas')->insert($pizzas);

    }
}
