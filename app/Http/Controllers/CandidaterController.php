<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ville;
use App\Models\Pays;
use App\Models\Domaine;

class CandidaterController extends Controller
{
    
    public function apply()
    {
        return view('pages.recrutement.candidater');
    }

    public function devenirPrestataire()
    {
        /*
        $data = [
            'Plomberie',
            'Menuiserie',
            'Carrelage',
            'Peinture',
            'Maçonnerie',
            'Feronnerie',
            'Mécanique',
            'Vitrerie',
            'Devis et plan de maison',
            'Prestation informatique',
            'Tapisserie',
            'Electricité',
            'Electronique',
            'Serigraphie',
            'Ménagère',
        ];

    	
        $data = [
            
                'Abidjan',
                'Bouaké',
                'Yamoussoukro',
                'Korhogo',
                'Daloa',
                'San-Pédro',
                'Man',
                'Divo',
                'Gagnoa',
                'Abengourou',
                'Agboville',
                'Grand-Bassam',
                'Dabou',
                'Dimbokro',
                'Ferkessédougou',
                'Bouaflé',
                'Bondoukou',
                'Séguéla',
                'Odienné',
                'Guiglo',
                'Toumodi',
                'Sassandra',
                'Aboisso',
                'Touba',
                'Bangolo',
                'Bingerville',
                'Anyama',
                'Soubré',
                'Duekoué',
                'Vavoua',
                'Méagui',
                'Zouan-Hounien',
                'Facobly',
                'Kouibly',
                'Sinfra',
                'Adiaké',
                'Agnibilékrou',
                'Danané',
                'Issia',
                'Bongouanou',
                'Toulépleu',
                'Guéyo',
                'Bonoua',
                'Sikensi',
                'Tiapoum',
                'Sinématiali',
                'Buyo',
                'Ouangolodougou',
                'Songon',
                'Oumé',
                'Adzopé',
                'Akoupé',
                'Jacqueville',
                'Zuénoula',
                'Tabou',
                'Tiassalé',
                'Daoukro',
                'Taabo',
                'Zoukougbeu',
                'Biankouma',
                'Agou',
                'Alépé',
                'Transua',
                'Katiola',
                'Tengréla',
                'Lakota',
                'Yakassé-Attobrou',
                'Tanda',
                'Djékanou',
                'Botro',
                'Grand-Lahou',
                'Kounahiri',
                'Azaguié',
                'Guitry',
                'Didiévi',
                'Béoumi',
                'Kouto',
                'Tiébissou',
                'Doropo',
                'Sakassou',
                'Maféré',
                'M’Batto',
                'Sipilou',
                'Arrah',
                'Bocanda',
                'Kouassi-Kouassikro',
                'Bloléquin',
                'Prikro',
                'Samatiguila',
                'Boundiali',
                'Béttié',
                'Attiégouakro',
                'Dianra',
                'Mankono',
                'M’Bengué',
                'Dikodougou',
                'Ayamé',
                'M’Bahiakro',
                'Sandégué',
                'Koun-Fao',
                'Ouaninou',
                'Bouna',
                'Koro',
                'Kaniasso',
                'Kani',
                'Dabakala',
                'Niakaramandougou',
                'Nassian',
                'Séguélon',
                'Taï',
                'Madinani',
                'Téhini',
                'Minignan',
                'Kong',
                'Gbéléban',
                'Fresco',
        ];

        foreach ($data as $d) {
            Ville::create([
                'libele' => $d,
                'pays_id' => 1,
            ]);
        }
        */
        // $pays = Pays::all('id','libele');
        return View('pages.recrutement.prestataire');
    }
}
