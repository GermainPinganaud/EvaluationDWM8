<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaseController extends Controller
{
  public function laravel()
  {
    return view('laravel');
  }
  public function helloworld()
  {
    return view('helloworld');
  }
}
