<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class blankController extends Controller
{
  public function index()
  {
      return view('blank');
  }
}
