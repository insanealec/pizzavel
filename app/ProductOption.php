<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductOption extends Model
{
    /* helper functions */

    /* scopes */

    /* relationships */
    public function sizes()
    {
        return $this->belongsToMany('App\Size', 'option_prices');
    }

    public function optionType()
    {
        return $this->belongsTo('App\OptionType');
    }
}
