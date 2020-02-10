<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class blogpage extends Model
{
    protected $fillable = [
        'title', 'description', 'articles',
    ];
    protected $table='blogpage';
}
