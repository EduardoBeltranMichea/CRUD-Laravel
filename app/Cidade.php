<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cidade extends Model
{
    public function pessoa(){
    	return $this->belongsTo('App\Pessoa', 'pessoa_id');
    }
}
