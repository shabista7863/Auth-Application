<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class signin extends Model
{
    protected $fillable = [
        'fname', 'email', 'phoneno',
    ];
}
