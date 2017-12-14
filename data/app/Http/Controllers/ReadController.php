<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product as Product;

class ReadController extends Controller
{
  public function show()
  {
    $products = Product::all();
    return view('list', ['products' => $products ]);
  }

}
