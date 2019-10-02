<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static findOrFail($id)
 */
class City extends Model
{
    public $table='cities';

    public function customers(){
        return $this->hasMany('App\Customer');
    }
}
