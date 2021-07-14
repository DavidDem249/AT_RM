<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    

    // public function __invoke(Request $request)
    // {
    //     return view('admin.dashboard');
    // }

    public function index()
    {

        return View('pages.dashboard.index');
    }

    public function addOffre()
    {
        return View('pages.dashboard.offre.add-offre');
    }

    public function profile()
    {
        return View('pages.dashboard.compte.profile');
    }
}
