<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    use HasFactory;
    public function Ingredients(){

        return $this->hasMany(Ingredient::class);
    }
    public function orderline()
    {
        return $this->belongsTo(Orderline::class);
    }
    public function IngredientErbij( Ingredient $ingredient ){


    }  public function IngredientEraf(){


}
public function price()
{

}
}
