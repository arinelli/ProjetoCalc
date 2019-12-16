<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Endereco;

use App\Aluno;

class Usuario extends Model
{

    public function endereco(){
        return $this->hasOne('App\Endereco');
    }

    public function aluno(){
        return $this->hasOne('App\Aluno');
    }

}
