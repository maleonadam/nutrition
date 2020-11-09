<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class WebsiteController extends Controller
{
    // landing page
    public function index()
    {
        return view('index');
    }

    // services page
    public function services()
    {
        return view('services');
    }

    // all products page
    public function allProducts()
    {
        $products=Product::orderBy('id', 'ASC')->get();
        return view('manage.allproducts', compact('products'));
    }

    // feedback page
    public function feedback()
    {
        return view('feedback');
    }

    // submit feedback
    public function submitFeedback(Request $request)
    {
        
    }
}
