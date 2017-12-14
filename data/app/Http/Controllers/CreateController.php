<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product as Product;

class CreateController extends Controller
{
  public function create()
  {
    $products = Product::all();
    return view('/', ['products' => $products ]);
  }
}
