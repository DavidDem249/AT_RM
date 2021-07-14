<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;
use App\Mail\SendPassForgotMail;
use Mail;
use App\Models\User;

class PasswprdForgot extends Component
{

	public $email;

	
    public function render()
    {
        return view('livewire.auth.passwprd-forgot');
    }
}
