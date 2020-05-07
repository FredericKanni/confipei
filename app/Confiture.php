<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Confiture extends Model
{
    protected $table = 'confitures';
    protected $fillable = ['name','stock'];

    public $timestamps = false;

    public function producteur(){
        return $this->belongsTo(Producteur::class, 'id_producteur');
    }


    public function commandes()
    {
        return $this->belongsToMany(Commande::class, 'commande_has_confiture','id_commande', 'id_confiture');
    }


    
    public function fruits()
    {
        return $this->belongsToMany(Fruit::class, 'confiture_has_fruit','id_fruit', 'id_confiture');
    }

    
    public function recompenses()
    {
        return $this->belongsToMany(Recompense::class, 'confiture_has_recompense', 'id_recompense', 'id_confiture');
    }
   
}
