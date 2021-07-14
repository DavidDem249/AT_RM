<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Formateur extends Model 
{

    protected $table = 'formateurs';
    public $timestamps = true;

    public function formations()
    {
        return $this->hasMany('App\Models\Formation');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

}