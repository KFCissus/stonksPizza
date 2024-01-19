<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Orderline;


class Order extends Model
{


    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['session','OrderStatus_id',];

   public function orderline()
   {
       return $this->hasMany(Orderline::class);
   }
   public function pizza()
   {
       return $this->hasMany('Pizza');
   }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function price()
    {

    }

}

