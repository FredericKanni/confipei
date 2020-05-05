<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fruit extends Model
{

    protected $table = 'fruit';
    protected $fillable = ['name'];

    public function confitures()
    {
        return $this->belongsToMany(Confiture::class, 'confiture_has_fruit');
    }
}
