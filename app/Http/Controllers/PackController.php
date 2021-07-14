<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PackController extends Controller
{
    
    public function packs()
    {
    	return View('pages.packs.index');
    }
}
