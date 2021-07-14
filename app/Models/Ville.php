<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ville extends Model 
{

    protected $table = 'villes';
    public $timestamps = true;

    protected $guarded = [''];

    public function pays()
    {
        return $this->belongsTo('App\Models\Pays');
    }

    public function prestataires()
    {
        return $this->hasMany('App\Models\Prestataire');
    }

    public function offres()
    {
        return $this->hasMany('App\Models\Offre');
    }

}