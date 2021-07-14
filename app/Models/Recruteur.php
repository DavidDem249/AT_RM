<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recruteur extends Model 
{

    protected $table = 'recruteurs';
    protected $guarded = [''];
    public $timestamps = true;

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function rapports()
    {
        return $this->hasMany('App\Models\Rapport');
    }

}