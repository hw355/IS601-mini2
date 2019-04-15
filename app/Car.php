<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $casts = [
        'make'     => 'string',
        'model'    => 'string',
        'year'     => 'integer',
        'user_id'     => 'integer',
    ];
}
