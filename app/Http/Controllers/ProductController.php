<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products  = Product::orderBy('name' ,'asc')->with('category')->get();
        return inertia('Product/Index', [
            'products' => $products
        ]);
    }
}
