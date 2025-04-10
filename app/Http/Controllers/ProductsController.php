<?php

namespace App\Http\Controllers;

class ProductsController extends Controller
{
    function index()
    {
        return view('sections.products');
    }

    function details()
    {
        return view('sections.product-details');
    }
}
