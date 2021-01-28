<?php
namespace App\Http\Controllers;





use Illuminate\Http\Request;

class mainControler extends Controller
{
  public function index($name)
  {
    if( 2 == $name)
    {
      return view('main');
    }
    if( 2 != $name) {
      return view('page');
    }
  }
}
