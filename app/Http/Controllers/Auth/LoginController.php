<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
use Session;
use Auth;
use DB;

class LoginController extends Controller
{
    
    public function form()
    {
        return View('pages.auths.login');
    }


    public function login(Request $request)
    {
    	$request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        $email    = $request->email;
        $password = $request->password;

        $remember_me  = $request->has('remember_me')? true:false;

        if(auth()->attempt(['email'=>$email,'password'=>$password,'status'=>'Active'],$remember_me))
        {
            $user = auth()->user();
        }else{
            Toastr::error('Echec, Email ou Mot de passe incorrect:)','Error');
            return back();
        }

        /*
        $dt         = Carbon::now();
        $todayDate  = $dt->toDayDateTimeString();

        $activityLog = [

            'name'        => $email,
            'email'       => $email,
            'description' => 'Connexion',
            'date_time'   => $todayDate,
        ]; 
        */
        if (Auth::attempt(['email'=>$email,'password'=>$password,'status'=>'Active'])) {
            // DB::table('activity_logs')->insert($activityLog);
            Toastr::success('Connexion effectuée :)','Success');
            return redirect()->intended('home');

        }elseif (Auth::attempt(['email'=>$email,'password'=>$password,'status'=> null])) {
            DB::table('activity_logs')->insert($activityLog);
            Toastr::success('Connexion effectuée :)','Success');
            return redirect()->intended('home');
        }
        else{
            Toastr::error('Echec, Email ou Mot de passe incorrect :)','Error');
            return redirect('login');
        }
    }


    public function logout()
    {
        $user = Auth::User();
        Session::put('user', $user);
        $user=Session::get('user');

        $name       = $user->name;
        $email      = $user->email;
        $dt         = Carbon::now();
        $todayDate  = $dt->toDayDateTimeString();

        $activityLog = [

            'name'        => $name,
            'email'       => $email,
            'description' => 'has logged out',
            'date_time'   => $todayDate,
        ];
        DB::table('activity_logs')->insert($activityLog);
        Auth::logout();
        Toastr::success('Logout successfully :)','Success');
        return redirect('login');
    }
    
}
