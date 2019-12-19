<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $fillable = ['name', 'price', 'body', 'picture', 'category_id', 'user_id'];
	
	public function catalogs () {
		return $this->belongsTo('App\Category', 'category_id');
	}
}
