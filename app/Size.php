<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    /* helper functions */

    /* scopes */

    /* relationships */
    public function productOptions()
    {
        return $this->belongsToMany('App\ProductOption', 'option_prices');
    }
}
