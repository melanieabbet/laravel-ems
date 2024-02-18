<?php

namespace App\Http\Controllers;

use App\Models\Ems; 

use Illuminate\Http\Request;


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
        return view('ems.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'societe' => 'required|string|max:255',
            'adresse' => 'required|string|max:255',
            'numero_telephone' => 'nullable|string|max:15',
        ]);

        Ems::create($request->all());

        return redirect()->route('ems.create')->with('success', 'EMS ajouté avec succès.');
    }

}
