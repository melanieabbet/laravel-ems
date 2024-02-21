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
        // return view('retraites.index', ['retraites' => Retraite::all()]);
        $retraites = Retraite::with('ems')->get();
        return view('retraites.index', compact('retraites'));
    }
    public function create()
    {
        $emsList = Ems::all();
        $retraite = new Retraite();
        return view('retraites.create', compact('retraite', 'emsList'));
    }

    public function store(StoreRetraiteRequest $request)
    {
        Retraite::create($request->except('_token', '_method'));
        return redirect()->route('retraites.index')->with('success', 'Retraite ajouté avec succès.');
    }
    

}
