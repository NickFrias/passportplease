<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        // Load the relevant products for the corresponding user
        $products = auth()->user()->products;

        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $validate = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'sku' => ['required', 'string', 'max:255', 'unique:products'],
            'description' => ['required', 'string', 'max:1500'],
            'category' => ['required', 'string', 'max:255'],
            'weight' => ['required', 'numeric', 'min:0', 'max:499.99'],
            'dimensions' => ['required', 'string', 'max:255'],
        ]);

        auth()->user()->products()->create($validate);

        return redirect()->route('products.index');
    }

    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }
}
