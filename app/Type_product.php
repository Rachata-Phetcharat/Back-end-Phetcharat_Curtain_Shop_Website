<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type_product extends Model
{
    protected $primaryKey = 'id_type';

    public function admin(){
        return $this->hasOne(User::class,'id','id_admin');
    }
}
