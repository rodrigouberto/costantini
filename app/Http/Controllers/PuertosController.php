<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PuertosController extends Controller
{
  public function showPuertos(){
    return view('puertos');
  }
}
