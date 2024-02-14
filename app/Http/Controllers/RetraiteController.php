<?php

namespace App\Http\Controllers;

use App\Models\Retraite;

use Illuminate\Http\Request;

class RetraiteController extends Controller
{
    public function index()
    {
        return view('retraites.index', ['retraites' => Retraite::all()]);
    }

}
