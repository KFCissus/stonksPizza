<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $guarded = ['id'];



   public function orderline()
   {
       return $this->hasMany(Orderline::class);
   }
   public function pizza()
   {
       return $this->hasMany(Pizza::class);
   }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function price()
    {

    }

}

