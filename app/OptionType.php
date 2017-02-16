<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OptionType extends Model
{
    /* helper functions */

    /* scopes */

    /* relationships */
    public function productOptions()
    {
        return $this->hasMany('App\ProductOption');
    }
}
