<?php

namespace App\Http\Livewire\Dashboard\Recruteur;

use Livewire\Component;
use App\Models\Recruteur as ModelRecruteur;

class Liste extends Component
{
    public function render()
    {
        return view('livewire.dashboard.recruteur.liste',[
        	'recruteurs' => ModelRecruteur::orderBy('created_at','DESC')->paginate(3),
        ]);
    }
}
