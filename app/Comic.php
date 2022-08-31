<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    protected $table = 'comics';

    protected $fillable = [
        'thumb',
        'title',
        'type',
        'price',
        'series',
        'description',
        'sale_date'
    ];
}
