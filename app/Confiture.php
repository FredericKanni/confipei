<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Confiture extends Model
{
    protected $table = 'confitures';
    protected $fillable = ['name','stock'];

    public $timestamps = false;

    public function produteur(){
        return $this->belongsTo(Producteur::class);
    }


    public function commandes()
    {
        return $this->belongsToMany(Commande::class, 'commande_has_confiture');
    }


    
    public function fruits()
    {
        return $this->belongsToMany(Fruit::class, 'confiture_has_fruit');
    }

    
    public function recompenses()
    {
        return $this->belongsToMany(Recompense::class, 'confiture_has_recompense');
    }
   
}
