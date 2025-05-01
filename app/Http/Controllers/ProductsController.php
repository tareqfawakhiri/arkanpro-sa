<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductsController extends Controller
{
    function index()
    {
        $products = Product::where('status', 'ACTIVE')
            ->orderBy('order')
            ->paginate(12);
        return view('sections.products', compact('products'));
    }

    function details($slug)
    {
        $product = Product::where('slug', $slug)
            ->where('status', 'ACTIVE')
            ->firstOrFail();
        return view('sections.product-details', compact('product'));
    }
}
