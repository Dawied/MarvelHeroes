<?php

namespace App\Http\Controllers;

use App\Models\Ability;
use Illuminate\Http\Request;

class AbilityController extends Controller
{
    public function index()
    {
        $abilities = Ability::all();
        return view('abilities.index', compact('abilities'));
    }

    public function create()
    {
        return view('abilities.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $hero = Ability::create($request->all());

        return redirect()->route('abilities.index')->with('success', 'Ability created');
    }

    public function show(Ability $ability)
    {
        //return view('heroes.show', compact('hero'));
    }

    public function edit(Ability $ability)
    {
        return view('abilities.edit', compact('ability'));
    }

    public function update(Request $request, Ability $ability)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $ability->update($request->all());

        return redirect()->route('abilities.index')
            ->with('success', 'Ability updated');
    }

    public function destroy(Ability $ability)
    {
        $ability->delete();

        return redirect()->route('abilities.index')
            ->with('success', 'Ability deleted');
    }
}
