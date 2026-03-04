<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ensenyament;

class EnsenyamentController extends Controller
{
    public function index()
    {
        $ensenyaments = Ensenyament::all();
        return view('ensenyaments.index', compact('ensenyaments'));
    }

    public function create()
    {
        return view('ensenyaments.create');
    }

    public function store(Request $request)
    {
        $request->validate(['nom' => 'required|string|max:255']);
        Ensenyament::create($request->all());
        return redirect()->route('ensenyaments.index');
    }

    public function edit(Ensenyament $ensenyament)
    {
        return view('ensenyaments.edit', compact('ensenyament'));
    }

    public function update(Request $request, Ensenyament $ensenyament)
    {
        $request->validate(['nom' => 'required|string|max:255']);
        $ensenyament->update($request->all());
        return redirect()->route('ensenyaments.index');
    }

    public function destroy(Ensenyament $ensenyament)
    {
        $ensenyament->delete();
        return redirect()->route('ensenyaments.index');
    }
}