<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Usuario;

class Endereco extends Model
{
    public function usuario(){
        return $this->belongsTo('App\Usuario');
    }
}
