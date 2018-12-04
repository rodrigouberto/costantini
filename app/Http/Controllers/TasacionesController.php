<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TasacionesController extends Controller
{
  public function showTasaciones(){
    return view('tasaciones');
  }
}
