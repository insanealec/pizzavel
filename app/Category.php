<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //Get all the products for this category.
	public function products()
	{
		return $this->belongsToMany('App\Product', 'product_categories')
			->withTimestamps();
	}
}
