<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Role
 *
 * @mixin \Eloquent
 */
class Role extends Model
{
    //
    public function user(){
        return $this->hasOne('App\User');
    }
}
