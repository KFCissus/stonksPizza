<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Faker\Core\DateTime;

class Customers extends Model
{
    use HasFactory;
}
class Customer {
    public string $naam;
    public string $adres;
    public string $woonplaats;
    public string $telefoonnummer;
    public string $emailadres;

}

