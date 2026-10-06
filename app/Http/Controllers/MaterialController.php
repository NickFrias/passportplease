<?php

namespace App\Http\Controllers;

use App\Models\Material;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

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

    public function edit(Material $material)
    {
        return view('materials.edit', compact('material'));
    }

    public function update(Request $request, Material $material): RedirectResponse
    {
        $validate = $request->validate([
            'name' => ['required', 'string', 'max:255', Rule::unique('materials')->ignore($material->id)],
            'description' => ['required', 'string', 'max:1500'],
        ]);

        $material->update($validate);

        return redirect()->route('materials.show', $material);
    }

    public function destroy(Material $material): RedirectResponse
    {
        $material->delete();

        return redirect()->route('materials.index');
    }

    public function show(Material $material)
    {
        return view('materials.show', compact('material'));
    }
}
