<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	//Not a part of the Product table, but relevent when placed in the cart.
	public $quantity = 0;

	//Get all the categories for this model.
	public function categories()
	{
		return $this->belongsToMany('App\Category', 'product_categories')
			->withTimestamps();
	}
}
