<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RecruteurController extends Controller
{

    public function index()
  	{
        return View('pages.dashboard.recruteur.liste');
  	}

}
