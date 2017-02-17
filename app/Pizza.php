<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    /* helper functions */

    /* scopes */

    /* relationships */
    public function crust()
    {
    	return $this->hasOne('App\ProductOption', 'id', 'crust_id');
    }
}
