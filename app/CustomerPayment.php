<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomerPayment extends Model
{
    protected $fillable = [
        'name', 'value'
    ];
}
