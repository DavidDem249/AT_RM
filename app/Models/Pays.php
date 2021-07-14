<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pays extends Model 
{

    protected $table = 'pays';
    protected $guarded = [''];
    public $timestamps = true;

    public function ville()
    {
        return $this->hasMany('App\Models\Ville');
    }

}