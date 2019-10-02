<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static findOrFail(int $id)
 */
class Customer extends Model
{
    public $table ='customers';
    public $timestamps = false;

    public function city(){
        return $this->belongsTo('App\City');
    }
}
