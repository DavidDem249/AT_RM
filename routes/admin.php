<?php 


// use App\Http\Livewire\Analytics;
use Illuminate\Support\Facades\Route;
// use App\Http\Livewire\Dashboard\Dashboard;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Dashboard\OffreController;
use App\Http\Controllers\Admin\RecruteurController;
use App\Http\Controllers\Admin\PrestataireController;
use App\Http\Controllers\Dashboard\EmployeController;


Route::get('/index', [DashboardController::class, 'index'])->name('admindash');

Route::get('/offres', [OffreController::class, 'offres'])->name('offre');
Route::post('/ajouter-offre', [OffreController::class, 'addOffre'])->name('offreadd');

Route::get('/recrutement/2/postuler', [CandidaterController::class, 'apply'])->name('apply');


//====================== Recruteur ====================
Route::group([], function(){
	Route::get('/ressources', [EmployeController::class, 'index'])->name('ressources');
});

//====================== Recruteur =================

Route::group([], function(){
	Route::get('/recruteur',[RecruteurController::class, 'index'])->name('recruteur');
});

