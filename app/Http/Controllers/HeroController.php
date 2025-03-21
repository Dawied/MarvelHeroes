<?php

namespace App\Http\Controllers;

use App\Models\Hero;
use Illuminate\Http\Request;

class HeroController extends Controller
{
  public function index()
  {
      $heroes = Hero::all();
      return view('heroes.index', compact('heroes'));
  }

  public function create()
  {
      return view('heroes.create');
  }

  public function store(Request $request)
  {
      $request->validate([
          'name' => 'required',
      ]);

      $hero = Hero::create($request->all());

      return redirect()->route('heroes.index')->with('success', 'Hero created');
  }

  public function show(Hero $hero)
  {
      //return view('heroes.show', compact('hero'));
  }

  public function edit(Hero $hero)
  {
      return view('heroes.edit', compact('hero'));
  }

  public function update(Request $request, Hero $hero)
  {
      $request->validate([
          'name' => 'required',
      ]);

      $hero->update($request->all());

      return redirect()->route('heroes.index')
          ->with('success', 'Hero updated');
  }

  public function destroy(Hero $hero)
  {
      $hero->delete();

      return redirect()->route('heroes.index')
          ->with('success', 'Hero deleted');
  }
}
