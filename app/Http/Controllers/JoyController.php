<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Joy;
class JoyController extends Controller
{
  public function index()
  {
    return view('Test');
  }
  function Test(Request $req)
  {
    $joy=new Joy();
    $joy->Name =$req->input ('Name');
        $joy->val =$req->input('val');
        $joy->save();
        return redirect('/Test');
  }
}
