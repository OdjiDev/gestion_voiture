<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\Voiture;
class VoitureController extends Controller
{


    public function index()
    {
        $voitures = Voiture::latest()->paginate(10);
        return view('voitures.index', compact('voitures'));
    }
    
    public function create()
    {
        return view('voitures.create');
    }
    
    public function store(Request $request)
    {
        $validated = $request->validate([
            'marque' => 'required|string|max:50',
            'modele' => 'required|string|max:50',
            'annee' => 'required|integer|min:1900|max:'.(date('Y')+1),
            'couleur' => 'required|string|max:30',
            'prix' => 'required|numeric|min:0',
            'immatriculation' => 'required|string|max:20|unique:voitures'
        ]);
    
        Voiture::create($validated);
        return redirect()->route('voitures.index')->with('success', 'Voiture ajoutée!');
    }
    
    public function show(Voiture $voiture)
    {
        return view('voitures.show', compact('voiture'));
    }
    
    public function edit(Voiture $voiture)
    {
        return view('voitures.edit', compact('voiture'));
    }
    
    public function update(Request $request, Voiture $voiture)
    {
        $validated = $request->validate([
            'marque' => 'required|string|max:50',
            'modele' => 'required|string|max:50',
            'annee' => 'required|integer|min:1900|max:'.(date('Y')+1),
            'couleur' => 'required|string|max:30',
            'prix' => 'required|numeric|min:0',
            'immatriculation' => 'required|string|max:20|unique:voitures,immatriculation,'.$voiture->id
        ]);
    
        $voiture->update($validated);
        return redirect()->route('voitures.index')->with('success', 'Voiture mise à jour!');
    }
    
    public function destroy(Voiture $voiture)
    {
        $voiture->delete();
        return redirect()->route('voitures.index')->with('success', 'Voiture supprimée!');
    }
}