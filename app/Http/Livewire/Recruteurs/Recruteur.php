<?php

namespace App\Http\Livewire\Recruteurs;

use Livewire\Component;
use Livewire\WithFileUploads;

use App\Models\Ville;
use App\Models\Pays;
use App\Models\Domaine;
use App\Models\Recruteur as ModelRecruteur;
use App\Models\User;
use DB;

class Recruteur extends Component
{

	use WithFileUploads;

	public $nom, $prenom, $phone, $pays, $ville, $date_naissance;
	public $email, $password, $password_confirmation, $avatar; 
	public $country, $cities;
	public $selectedState = NULL;

    public function mount()
    {
        $this->country = Pays::all();
        $this->cities = collect();
    }

    public function submit()
    {

    	$validate = $this->validate([
    		'nom' => 'required|min:3',
    		'prenom' => 'required|min:3',
    		'phone' => 'required|min:6',
    		'pays' => 'nullable',
    		'ville' => 'nullable',
            'date_naissance' => 'nullable',
    		'email' => 'required|string|email|max:255',
    		'avatar' => 'nullable|mimes:png,jpg',
    		'password' => 'required|string|min:8|confirmed',
    		// 'password_confirmation' => 'required',
    	]);


        if($validate){

            $this->avatar->store('avatars', 'public') ?? '';
            // dd($this->avatar);

            $email_not_exis = DB::table('users')->where('email', $this->email)->doesntExist();

            if($email_not_exis)
            {
                $user = User::create([
                    'name' => $this->nom.$this->prenom,
                    'email' => $this->email,
                    'password' => bcrypt($this->password),
                    'role' => 'recruteur',
                ]);

                ModelRecruteur::create([
                    'lastname' => $this->nom,
                    'firstname' => $this->prenom,
                    'phone' => $this->phone,
                    'email' => $this->email,
                    // 'domicile' => $this->domicile,
                    'avatar' => $this->avatar,
                    'ville_id' => $this->ville,
                    'user_id' => $user->id,
                    'date_naissance' => $this->date_naissance,
                    // 'domaine_id' => $this->domaine,
                ]);

                session()->flash('success', 'Inscription effectuée avec succès.');
                return redirect(route('login'));//->to('/add-recruteur');

            }else{

                session()->flash('echec', 'Cette adresse email existe déjà');
                return redirect()->to('/devenir-prestataire');
            }
        }else{
            session()->flash('invalide', 'Remplissez correctement les champs');
            return redirect()->to('/devenir-prestataire');
        }
    }


    public function updatedPays($countrie)
    {
        if(!is_null($countrie)) {
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
        $this->email = null;
        $this->password = null;
        $this->password_conf = null;
        $this->avatar = null;
    }


    public function render()
    {
        return view('livewire.recruteurs.recruteur');
    }


}
