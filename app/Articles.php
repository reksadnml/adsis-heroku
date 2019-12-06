<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
    $protected $fillable = [
    	'id',
    	'name',
    	'content',
    	'category_id'
    ];
}
