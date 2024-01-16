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
    public function Orderline()
    {
        return $this->belongsTo(Orderline::class);
    }
    public function IngredientErbij( Ingredient $ingredient ){


    }  public function IngredientEraf(){


}
public function Price()
{
    $price = 0;
    foreach ($this->ingredients as $ingredient)
    {
        $ingredientprice = $ingredient->price * $ingredient->pivot->quantity;
        $price +=  $ingredientprice;
    }
    return $price;
}
}
