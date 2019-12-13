<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $table = 'empresas';

    protected $fillable = ['nome','users_id'];


    public function user(){
        return $this->hasOne('App/User');
    }
}
