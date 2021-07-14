<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Offre extends Model 
{

    protected $table = 'offres';
    public $timestamps = true;

    public function domaine()
    {
        return $this->belongsTo('App\Models\Domaine');
    }

    public function ville()
    {
        return $this->belongsTo('App\Models\Ville');
    }

}