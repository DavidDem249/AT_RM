<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecruteurController extends Controller 
{

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
      return View('pages.dashboard.recruteur.liste');
  }

  
}

?>