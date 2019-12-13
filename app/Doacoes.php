<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doacoes extends Model
{
    protected $table = 'doacoes';

    protected $fillable = ['id','nome','tipo','validade','quantidade','status','empresa_id'];

    public function user()
    {
        return $this->hasMany('App/Empresa');
    }
}
