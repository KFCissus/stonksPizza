<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Koerierscooter extends Model
{

    protected $fillable = ['scooter', 'schade'];
    use HasFactory;
}
