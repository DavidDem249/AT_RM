<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmployeController extends Controller
{

	public function __construct()
	{
		$this->middleware('auth');
	}
    
    public function liste()
    {
        return View('pages.dashboard.employe.liste');
    }

    public function index()
  	{
      	return View('pages.dashboard.ressources.index');
  	}
}
