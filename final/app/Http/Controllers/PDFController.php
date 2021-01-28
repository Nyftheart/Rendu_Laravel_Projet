<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



use PDF;
use Mail;

class PDFController extends Controller
{
  /**
   * Write code on Method
   *
   * @return response()
   */
  public function index()
  {

      $data["email"] = "alexandreA1.kramer@gmail.com";
      $data["title"] = "Merci beaucoup pour votre achat!";
      $data["body"] = "ConfiGaming";

      $pdf = PDF::loadView('myTestMail', $data);

      Mail::send('myTestMail', $data, function($message)use($data, $pdf) {
          $message->to($data["email"], $data["email"])
                  ->subject($data["title"])
                  ->attachData($pdf->output(), "Facture.pdf");
      });
      return view('/page');

  }
}
