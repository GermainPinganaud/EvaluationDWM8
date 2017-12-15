<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\State;
use App\Tag;


  // **********    CRUD    **********

class ProductController extends Controller
{

  // **********    CREATE    **********

  public function insertOne(Request $request)
  {
    $product = new Product;
    $product->name = $request->name;
    $product->reference = $request->reference;
    $product->quantity = $request->quantity;
    $product->save();
    return redirect('/read');
  }

  // **********     READ    **********

  public function read()
  {
    $products = Product::all();
    return view('read', ['products' => $products ]);
  }

  // **********    UPDATE    **********

  public function updateOne(Request $request, $id)
  {
    $products = Product::all();
    $product = Product::find($id);
    return view('update', ['product' => $product, 'products' => $products, 'id' => $id]);
  }


  public function updateOneAction(Request $request)
  {
    $product = Product::find($request->id);
    $product->name = $request->name;
    $product->reference = $request->reference;
    $product->quantity = $request->quantity;
    $product->save();
    return redirect('/read');
  }


  // **********    DELETE    **********

  public function deleteOne(Request $request, $id)
  {
    $product = Product::find($id);
    $product->delete();
    return redirect('/read');
  }
}
