<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Actor;

class ActorController extends Controller
{
    public function index()
    {
        $actors = Actor::all();
        return view('actors.index', compact('actors'));
    }

    public function create()
    {
        return view('actors.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'birth_date' => 'required|date',
            'nationality' => 'required',
        ]);

        Actor::create($request->all());

        return redirect()->route('actors.index');
    }

    public function edit($id)
    {
        $actor = Actor::findOrFail($id);
        return view('actors.edit', compact('actor'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'birth_date' => 'required|date',
            'nationality' => 'required',
        ]);

        $actor = Actor::findOrFail($id);
        $actor->update($request->all());

        return redirect()->route('actors.index');
    }



    public function destroy($id)
    {
        $actor = Actor::findOrFail($id);
        $actor->delete();

        return redirect()->route('actors.index')->with('success', 'Actor deleted successfully');
    }



}
