<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Order extends Model
{
    use Searchable;

    protected $fillable = ['quantity', 'color', 'battery', 'firstname', 'lastname', 'email', 'city', 'address', 'postalcode', 'phonenumber', 'price'];
}
