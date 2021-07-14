<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rapport extends Model 
{

    protected $table = 'rapports';
    public $timestamps = true;

    public function recruteur()
    {
        return $this->belongsTo('App\Models\Recruteur');
    }

}