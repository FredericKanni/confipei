<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producteur extends Model
{
    protected $table = 'producteurs';
    protected $fillable = ['name'];

    public $timestamps = false;

    public function confitures(){
     
            return $this->hasMany(Confiture::class);
    
    }
}
