<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ForgotPasswordController extends Controller
{
    
    public function form()
    {
    	return View('pages.auths.forgot');
    } 
}
