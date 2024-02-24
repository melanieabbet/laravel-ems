<?php

namespace App\Http\Controllers;

use App\Models\Retraite;
use App\Models\Ems; 
use App\Http\Requests\StoreRetraiteRequest;

use Illuminate\Http\Request;

class RetraiteController extends Controller
{
    public function index()
    {
        $retraites = Retraite::with('ems')
                         ->orderBy('ems_id')
                         ->orderBy('nom')
                         ->get();
        return view('retraites.index', compact('retraites'));
    }
    public function create()
    {
        $emsCount = Ems::count();
        if ($emsCount === 0) {
            // Aucun EMS n'existe, renvoyer un message d'erreur
            return redirect()->back()->with('error', 'Impossible d\'ajouter un retraité car aucun EMS n\'existe.');
        }
        $emsList = Ems::all();
        $retraite = new Retraite();
        return view('retraites.create', compact('retraite', 'emsList'));
    }

    public function store(StoreRetraiteRequest $request)
    {
        Retraite::create($request->except('_token', '_method'));
        return redirect()->route('retraites.index')->with('success', 'Retraité ajouté avec succès.');
    }
    
    public function edit($id)
    {
        $retraite = Retraite::findOrFail($id);
        $emsList = Ems::all();
        return view('retraites.edit', compact('retraite','emsList'));
    }
    public function update(StoreRetraiteRequest $request)
    {
        
        $id = $request->input('id');
        $retraite = Retraite::findOrFail($id);
        $validatedData = $request->validated();
        $retraite->update($validatedData);
        return redirect()->route('retraites.index', ['id' => $id])->with('success', 'Retraité mis à jour');
    }
    public function destroy($id)
    {
        $retraite = Retraite::findOrFail($id);
        $retraite->delete();
        return redirect()->route('retraites.index')->with('success', 'Retraité supprimé avec succès');
    }

}
