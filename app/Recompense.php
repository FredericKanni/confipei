<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recompense extends Model
{
    protected $table = 'recompense';
    protected $fillable = ['name'];

    public $timestamps = false;

     public function confitures()
    {
        return $this->belongsToMany(Confiture::class, 'confiture_has_recompense');
    }
}
