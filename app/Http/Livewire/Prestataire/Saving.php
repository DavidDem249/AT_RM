<?php

namespace App\Http\Livewire\Prestataire;

use Livewire\Component;
use App\Models\Prestataire as ModelPrestataire;
use Livewire\WithFileUploads;
use Brian2694\Toastr\Facades\Toastr;

use App\Models\Ville;
use App\Models\Pays;
use App\Models\Domaine;
use App\Models\User;
use DB;

class Saving extends Component
{

	use WithFileUploads;

	public $nom, $prenom, $phone, $pays, $ville, $date_naissance;
	public $domaine, $domaine2, $email, $password, $password_confirmation, $avatar; 
	public $country, $cities;
	public $domaines;
	public $selectedState = NULL;

    // public $isUploading = null;

	protected $rules = [
        'nom' => 'required|min:2',
        'prenom' => 'required|min:3',
        'phone' => 'required|min:8',
        'pays' => 'required',
        'ville' => 'required',
        'date_naissance' => 'nullable',
        'domaine' => 'nullable',
        'domaine2' => 'nullable',
        'email' => 'required|email',
        'password' => 'required',
        'password_confirmation' => 'required',
        'avatar' => 'nullable',
    ];

    public function mount()
    {
        $this->country = Pays::all();
        $this->domaines = Domaine::all();
        $this->cities = collect();
    }


    public $form = [
        'nom'                   => '',
        'prenom'                => '',
        'phone'                 => '',
        'pays'                  => '',
        'ville'                 => '',
        'date_naissance'        => '',
        'domaine'               => '',
        'domaine2'              => '',
        'name'                  => '',
        'email'                 => '',
        'password'              => '',
    ];

    public function submit()
    {
    	$validate = $this->validate([
    		'nom' => 'required|min:3',
    		'prenom' => 'required|min:3',
    		'phone' => 'required|min:6',
    		'pays' => 'nullable',
    		'ville' => 'nullable',
    		'date_naissance' => 'nullable',
    		'domaine' => 'required',
    		'domaine2' => 'nullable',
    		// |unique:users  |confirmed
    		'email' => 'required|string|email|max:255',
    		'avatar' => 'nullable|mimes:png,jpg',
    		'password' => 'required|string|min:8',
    		'password_confirmation' => 'required',
    	]);

        $email_not_exis = DB::table('users')->where('email', $this->email)->doesntExist();

    	if($validate){


            $this->avatar->store('avatars', 'public');

            if($email_not_exis)
            {
                $user = User::create([
                    'name' => $this->nom.$this->prenom,
                    'email' => $this->email,
                    'password' => bcrypt($this->password),
                    'role' => 'prestataire',
                ]);

                ModelPrestataire::create([
                    'lastname' => $this->nom,
                    'firstname' => $this->prenom,
                    'phone' => $this->phone,
                    'email' => $this->email,
                    'avatar' => $this->avatar,
                    'ville_id' => $this->ville,
                    'user_id' => $user->id,
                    'date_naissance' => $this->date_naissance,
                    'domaine_id' => $this->domaine,
                ]);

                session()->flash('success', 'Inscription effectuée avec succès.');
                return redirect(route('login'));//->to('/devenir-prestataire');

            }else{

                session()->flash('echec', 'Cette adresse email existe déjà');
                return redirect()->to('/devenir-prestataire');
            }

        }else{
            session()->flash('invalide', 'Remplissez correctement les champs');
            return redirect()->to('/devenir-prestataire');
        }

        // Toastr::success('Create new account successfully :)','message');

    }

    public function updatedPays($countrie)
    {
        if (!is_null($countrie)) {
            $this->cities = Ville::where('pays_id', $countrie)->get();
        }
    }

    public function resetInput()
    {
        $this->nom = null;
        $this->prenom = null;
        $this->phone = null;
        $this->pays = null;
        $this->ville = null;
        $this->date_naissance = null;
        $this->domaine = null;
        $this->domaine2 = null;
        $this->email = null;
        $this->password = null;
        $this->password_conf = null;
        $this->avatar = null;
    }


    public function render()
    {
        return view('livewire.prestataire.saving');
    }

}
