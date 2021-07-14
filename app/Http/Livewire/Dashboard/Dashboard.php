<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;
use App\Models\Prestataire;
use App\Models\Recruteur;

class Dashboard extends Component
{
	
    public function render()
    {
        return view('livewire.dashboard.dashboard', [
        	'prestataire' => Prestataire::count(),
        	'recruteur' => Recruteur::count(),
        ]);
    }
}
