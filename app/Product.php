<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
    'name', 'Category_id'
    ];

    function theCategory()
    {	
    	return $this->belongsTo('App\Category','Category_id');
    }
}
