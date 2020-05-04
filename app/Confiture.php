<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Confiture extends Model
{
    protected $table = 'confiture';
    protected $fillable = ['name'];

    public function produteur(){
        return $this->belongsTo(Producteur::class);
    }


   
}
