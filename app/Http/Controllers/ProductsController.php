<?php

namespace App\Http\Controllers;

use App\Models\Product;
use TCG\Voyager\Models\Page;
use App\Models\Service;
use App\Models\Pricing;

class ProductsController extends Controller
{
    function index()
    {
        $products = Product::where('status', 'ACTIVE')
            ->orderBy('order')
            ->paginate(12);
        $page = Page::where('slug', 'products')->firstOrFail();


         $section = Service::where('slug', 'quroosh')
            ->with('features')
            ->firstOrFail();


        return view('sections.products', compact('products','page','section'));
    }

    function details($slug)
    {
        $product = Product::where('slug', $slug)
            ->where('status', 'ACTIVE')
            ->firstOrFail();

        return view('sections.product-details', compact('product'));
    }
}
