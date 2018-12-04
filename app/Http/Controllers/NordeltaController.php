<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NordeltaController extends Controller
{
    public function showNordelta(){
      return view('nordelta');
    }
}
