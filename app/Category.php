<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /* helper functions */

    /* scopes */

    /* relationships */
	public function products()
	{
		return $this->belongsToMany('App\Product', 'product_categories')
			        ->withTimestamps();
	}
}
