<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Usuario;

class Aluno extends Model
{
    public function usuario(){
        return $this->belongsTo('App\Usuario');
    }
}
