<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fruit extends Model
{
    protected $table = 'fruits';
    protected $fillable = ['name', 'slug', 'image', 'month_start', 'month_end'];

}