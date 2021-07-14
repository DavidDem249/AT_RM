<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Formation extends Model 
{

    protected $table = 'formations';
    public $timestamps = true;

    public function formateur()
    {
        return $this->belongsTo('App\Models\Formateur');
    }

}