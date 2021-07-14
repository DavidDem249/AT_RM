<?php

namespace App\Http\Livewire\Dashboard\Offre;

use Livewire\Component;
use App\Models\Offre;

class AddOffre extends Component
{
	public $title, $description, $comp_tech, $place, $date_limite;
	public $type_travail, $lieu, $duration, $ville, $domaine;

    public function render()
    {
        return view('livewire.dashboard.offre.add-offre');
    }

    public function submit()
    {

    	$this->validate([
    		'title' => 'required',
    		'description' => 'nullable',
    		'comp_tech' => 'nullable',
    		'place' => 'nullable',
    		'date_limite' => 'nullable',
    		'type_travail' => 'nullable',
    		'lieu' => 'required',
    		'duration' => 'required',
    		'ville' => 'required',
    		'domaine' => 'required',
    	]);

    	Offre::create([
    		'title' => $this->title,
    		'description' => $this->description,
    		'comp_tech' => $this->comp_tech,
    		'place' => $this->place,
    		'date_limite' => $this->date_limite,
    		'type_travail' => $this->type_travail,
    		'lieu' => $this->lieu,
    		'duration' => $this->duration,
    		'ville_id' => $this->ville,
    		'domaine_id' => $this->domaine,
    	]);

    	session()->flash('succes','Offre crée');
    }
}
