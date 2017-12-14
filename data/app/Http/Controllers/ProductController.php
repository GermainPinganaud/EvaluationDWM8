<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\State;
use App\Tag;

class ProductController extends Controller
{
  public function insertOne(Request $request)
  {
    $product = new Product;
    $product->name = $request->name;
    $product->reference = $request->reference;
    $product->quantity = $request->quantity;
    $product->save();
    return redirect('/read');
  }
  public function deleteOne(Request $request, $id)
  {
    $product = Product::find($id);
    dd($product);
    $product->delete();
    return redirect('/read');
  }
}
