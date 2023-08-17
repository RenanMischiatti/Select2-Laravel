<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() 
    {
        $products = Product::simplePaginate(10);

        return view('welcome', compact('products'));
    }
}
