<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ajoutController extends Controller
{
  public function store()
  {
    $request->validate([
                   'game_name'             =>      $data['game_name'],
                   'prix'          =>      $data['prix'],
                   'game_type'              =>      $data['game_type'],
                   'img'             =>      $data['img'],

      ]);

      games::create($request->all());
      return view('blank');
  }

}
