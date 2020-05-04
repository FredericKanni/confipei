<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producteur extends Model
{
    protected $table = 'produteur';
    protected $fillable = ['name'];

    public function confitures(){
     
            return $this->hasMany(Confiture::class);
    
    }
}
