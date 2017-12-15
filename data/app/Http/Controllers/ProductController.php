<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;
use App\Brand;
use App\Category;


  // **********    CRUD    **********

class ProductController extends Controller
{

  // **********    CREATE    **********

  public function insertOne(Request $request)
  {
    $product = new Product;
    $product->name = $request->name;
    $product->reference = $request->reference;
    $product->brand_id = $request->brand;
    $product->category_id = $request->category;
    $product->quantity = $request->quantity;
    $product->save();
    return redirect('/read');
  }

  // **********     READ    *********

  public function read()
  {
    $products = Product::all();
    $brands = Brand::all();
    $categories = Category::all();
    return view('read', ['products' => $products, 'brands' => $brands, 'categories' => $categories]);
  }

  // **********    UPDATE    **********

  public function updateOne(Request $request, $id)
  {
    $product = Product::find($id);
    $products = Product::all();
    $brands = Brand::all();
    foreach ($brands as $brand) {
      $brands[$brand->id] = $brand->name;
    }
    $categories = Category::all();
    return view('update',
    [
      'product' => $product,
      'products' => $products,
      'id' => $id,
      'brands' => $brands,
      'categories' => $categories
    ]);
  }

  public function updateOneAction(Request $request)
  {
    $product = Product::find($request->id);
    $product->name = $request->name;
    $product->reference = $request->reference;
    $product->category_id = $request->state;
    $product->quantity = $request->quantity;
    dd($request);
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


  // **********    DEBUGMODE    **********

    public function saferead()
  {
    $products = Product::all();
    return view('saferead', ['products' => $products]);
  }
}
