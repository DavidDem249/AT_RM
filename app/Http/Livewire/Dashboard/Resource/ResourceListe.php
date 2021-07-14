<?php

namespace App\Http\Livewire\Dashboard\Resource;

use Livewire\Component;
use App\Models\Prestataire;

class ResourceListe extends Component
{
    public function render()
    {
        return view('livewire.dashboard.resource.resource-liste', [
        	'resources' => Prestataire::all()
        ]);
    }
}
