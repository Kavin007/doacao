<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    protected $table = 'enderecos';

    protected $fillable = ['estado','cidade','bairro','cep','rua','numero','empresa_id'];

    public function user()
    {
        return $this->hasMany('App/Empresa');
    }

    
}
