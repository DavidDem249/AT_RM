<?php

namespace App\Http\Livewire\Contact;

use Livewire\Component;
use App\Mail\SendUserMail;
use Mail;
use App\Models\Contact;


class ContactComponent extends Component
{
	public $nom, $prenom, $email, $subject, $message, $phone;


	public function sendMessage()
	{
		$this->validate([
			'nom' => 'required|min:2',
			'prenom' => 'required|min:3',
			'email' => 'required|email',
			'subject' => 'nullable',
			'message' => 'nullable',
			'phone' => 'nullable',
		]);

		$data = Contact::create([
			'firstname' => $this->nom,
			'lastname' => $this->prenom,
			'email' => $this->email,
			'object' => $this->subject,
			'phone' => $this->phone,
			'message' => $this->message,
		]);
		// dd($data);
		if($data)
		{
			Mail::to($this->email)->send(new SendUserMail($data));
		}

		$this->resetInput();
		session()->flash('message', 'Message envoyé.');
		return redirect()->to('/contact-us');
	}

	private function resetInput()
	{
		$this->nom = null;
		$this->prenom = null;
		$this->email = null;
		$this->subject = null;
		$this->message = null;
		$this->phone = null;
	}

    public function render()
    {
        return view('livewire.contact.contact-component');
    }
}
