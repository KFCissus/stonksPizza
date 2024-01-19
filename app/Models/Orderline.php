<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orderline extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table="order_line";
    protected $fillable = ['quantity','pizzas_id','order_id','size_id'];
    //protected $unique = ['id'];


    public function orderLine()
    {
        return $this->belongsTo(Order::class)->distinct();
    }



    public function price()
    {


    }
}
