<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $table = 'addresses';
    public $timestamps = false;
    protected $fillable = [
        'street',
        'house_no',
        'house_no_addition',
        'postal_code',
        'city',
    ];
}
