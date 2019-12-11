<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
class Report_genarate extends Controller
{
    function gen()
    {
      $pdf=App::make ('dompdf.wrapper');

$val="bal";

      $pdf->loadHTML(' <h1 style="color:blue;" align="center">Tax Payment System</h1>
       <p  style="margin:auto;display:block">
       <span class="caret"></span></p>');
      return $pdf ->stream();
    }
    public function index()
    {
      $name=Auth::user()->name;
    }
}
