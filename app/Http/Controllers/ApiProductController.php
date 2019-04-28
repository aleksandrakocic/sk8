<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Product;

class ApiProductController extends Controller
{
    public function index() {

        $products = Product::get();
        $user = \Auth::id();
        return response()->json($products);
    }

    public function destroy(Product $product)
    {
        $product->delete();
        
    }
    
}
