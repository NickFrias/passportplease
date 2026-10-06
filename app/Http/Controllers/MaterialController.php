<?php

namespace App\Http\Controllers;

use App\Models\Material;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class MaterialController extends Controller
{
    public function index()
    {
        $materials = Material::all();

        return view('materials.index', compact('materials'));
    }
    
    public function create()
    {
        return view('materials.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $validate = $request->validate([
            'name' => ['required', 'string', 'max:255', 'unique:materials'],
            'description' => ['required', 'string', 'max:1500'],

        ]);

        Material::create($validate);

        return redirect()->route('materials.index');
    }

    //     public function edit(Product $product)
    //     {
    //         return view('products.edit', compact('product'));
    //     }

    //     public function update(Request $request, Product $product)
    //     {
    //         $validate = $request->validate([
    //             'name' => ['required', 'string', 'max:255'],
    //             'sku' => ['required', 'string', 'max:255', Rule::unique('products')->ignore($product->id)],
    //             'description' => ['required', 'string', 'max:1500'],
    //             'category' => ['required', 'string', 'max:255'],
    //             'weight' => ['required', 'numeric', 'min:0', 'max:499.99'],
    //             'dimensions' => ['required', 'string', 'max:255'],
    //         ]);

    //         $product->update($validate);

    //         return redirect()->route('products.show', $product);
    //     }

    //     public function destroy(Product $product): RedirectResponse
    //     {
    //         $product->delete();

    //         return redirect()->route('products.index');
    //     }

    public function show(Material $material)
    {
        return view('materials.show', compact('material'));
    }
}
