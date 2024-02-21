<?php

namespace App\Http\Controllers;

use App\Models\Ems; 
use App\Http\Requests\StoreEmsRequest;

use Illuminate\Http\Requests;


class EmsController extends Controller
{
   
    public function index()
    {
        return view('ems.index', ['ems' => Ems::all()]);
    }

    public function show($id)
    {
        $ems = Ems::findOrFail($id);
        return view('ems.single', compact('ems'));
    }

    public function create()
    {
        return view('ems.create', ['ems' => new Ems()]);
    }

    public function edit($id)
    {
        $ems = Ems::findOrFail($id);
        return view('ems.edit', compact('ems'));
    }

    public function update(StoreEmsRequest $request)
    {
        
        $id = $request->input('id');
        $ems = Ems::findOrFail($id);
        $validatedData = $request->validated();
        $ems->update($validatedData);
        return redirect()->route('ems.show', ['id' => $id])->with('success', 'Ems mis à jour');
    }

    public function store(StoreEmsRequest $request)
    {
        Ems::create($request->except('_token', '_method'));
        return redirect()->route('ems.index')->with('success', 'EMS ajouté avec succès.');
    }


    public function destroy($id)
    {
        $ems = Ems::findOrFail($id);

        if (!$ems->isDeletable()) {
            return redirect()->back()->with('error', 'Impossible de supprimer cet Ems car il contient des retraités.');
        }else {
            $ems->delete();
            return redirect()->route('ems.index')->with('success', 'Ems supprimé avec succès');
        }
    }


}
