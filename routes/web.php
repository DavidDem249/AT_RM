<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\RecrutementController;
use App\Http\Controllers\CandidaterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DemandeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\TesstController;
use App\Http\Controllers\PackController;

use Illuminate\Support\Facades\Auth;
// use App\Http\Controllers\Dashboard/PrestataireController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [IndexController::class, 'index'])->name('home');

Route::get('/login', [LoginController::class, 'form'])->name('login');
Route::get('/register', [RegisterController::class, 'form'])->name('register');
Route::get('/forgot', [ForgotPasswordController::class, 'form'])->name('forgot');

Route::get('/logout', function() {
	Auth::logout();
	return redirect()->route('login')->with('logout','Vous êtes déconnecter');
})->name('logout');

Route::get('/profile', [DashboardController::class, 'profile'])->name('profile');


Route::get('/devenir-prestataire', [CandidaterController::class, 'devenirPrestataire'])->name('prestataire');

Route::get('/demander-ressource', [DemandeController::class, 'demandeRessource'])->name('demandeRessource');

Route::get('/add-recruteur', [RecrutementController::class, 'formRecruteur'])->name('formRecruteur');

Route::get('/nos-offres', [RecrutementController::class, 'offres'])->name('offres');
Route::get('/details-offres', [RecrutementController::class, 'detailOffre'])->name('detailOffre');
Route::get('/contact-us', [ContactController::class, 'contact'])->name('contact');

// Route::get('.')

Route::get('/nos-service', [ServiceController::class, 'index'])->name('service');
Route::get('/event', [EventController::class, 'index'])->name('event');
Route::get('/show-events', [EventController::class, 'calendarEvents']);

Route::get('/mon-test', [TesstController::class, 'letest'])->name('teste');

//Nos tarifs
Route::get('/nos-packs', [PackController::class, 'packs'])->name('packs');




