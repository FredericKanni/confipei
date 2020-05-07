<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    protected $table = 'commandes';
    protected $fillable = ['id'];


    public $timestamps = false;

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_has_commande','id_user'  ,'id_commande');
    }

    public function confiture()
    {
        return $this->belongsToMany(Confiture::class, 'commande_has_confiture','id_confiture'  ,'id_commande');
    }

   
}
