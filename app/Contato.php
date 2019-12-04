<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    protected $table = 'contatos';

    protected $fillable = ['id','telefone','celular','users_id'];

    public function user()
    {
        return $this->hasMany('App/User');
    }
}
