<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product as Product;

class ListController extends Controller
{
  public function index() {

    $products = Product::all();
    return view('list', ['products' => $products ]);
  }
}
