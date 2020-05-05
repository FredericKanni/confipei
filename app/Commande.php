<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    protected $table = 'commande';
    protected $fillable = ['id'];


    public function users()
    {
        return $this->belongsToMany(User::class, 'user_has_commande');
    }

    public function confiture()
    {
        return $this->belongsToMany(Confiture::class, 'commande_has_confiture');
    }

   
}
