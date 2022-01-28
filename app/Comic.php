<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    public $timestamps = false;
    protected $fillable =[
        'title',
        'author',
        'release_date',
        'pages',
    ];
}
