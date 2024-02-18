<?php

namespace App\Http\Controllers;

use App\Models\Retraite;
use App\Models\Ems; 

use Illuminate\Http\Request;

class RetraiteController extends Controller
{
    public function index()
    {
        // return view('retraites.index', ['retraites' => Retraite::all()]);
        $retraites = Retraite::with('ems')->get();
        return view('retraites.index', compact('retraites'));
    }

}
