<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class gameController extends Controller
{
  public function index()
  {
      return view('ajout');
  }
}
