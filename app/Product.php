<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	//Not a part of the Product table, but relevent when placed in the cart.
	public $quantity = 0;

	public function productType()
	{
		return $this->hasOne('App\ProductType', 'id', 'type');
	}
}
