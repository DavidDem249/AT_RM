<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServiceController extends Controller
{
    
    public function index()
    {
        $services = $this->loadFakeDataFromTxtFile();
        //$domaines = DB::table('domaines')->orderBy('id', 'desc')->get()->toArray();
        //dd($domaines);
    	return View('pages.services.index')
                ->with([
                    'service' => $services,
                    //'domaine' => $domaines
                ]);
    }

    private function loadFakeDataFromTxtFile()
    {
        //lien vers le fichier texte
        $services = public_path('fakeData') . '/fake_services.txt';

        //recuperation du contenu du fichier txt
        $services_file_content = file_get_contents($services);

        //convertion du contenu en array
        $liste_services = json_decode($services_file_content);
        
        return $liste_services;
    }

}
