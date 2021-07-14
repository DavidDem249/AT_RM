<?php

namespace App\Http\Livewire\Auth;
use Illuminate\Http\Request;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class Login extends Component
{

	public $email, $password, $remember_me;

	
    public function submit(Request $request)
    {
        $this->validate([
            'email'    => 'required|email',
            'password' => 'required',
        ]);

        
        $remember_me = $request->has('remember_me')? true:false;

        if(auth()->attempt([
        	'email'=>$this->email,
        	'password'=>$this->password,
        	'status'=>'Active'],
        	$remember_me)){

            $user = auth()->user();
            session()->flash('success', 'Bienvenue '.$user->name);
            return redirect()->to('/dashboard/index'); 
        }else{
        	session()->flash('echec', 'Email ou mot de passe incorrect');
        	// return redirect(route('login'));
            // return back();
        }

        // Auth::attempt($this->form);
    }


    public function render()
    {
    	// $user = User::where('email', '=', $this->email)->first();

        return view('livewire.auth.login');
    }
}
