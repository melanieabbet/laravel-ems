<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\User;

class UserController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function loginOrRegister(Request $request)
    {
        $credentials = $request->only('name','email', 'password');
        $existingUser = User::where('email', $request->input('email'))->first();

        if ($existingUser) {

            if (!Auth::attempt($credentials)) {
                // Les informations de connexion sont incorrectes
                Session::flash('error', 'Email déjà connu, utilisateur ou mot de passe incorrect.');
                return redirect()->back()->withInput();
            } else {
                return redirect()->intended('/')->with('success', 'Vous êtes à présent connecté.');
            }
        } else {
            // L'utilisateur n'existe pas, créons-le
            $user = User::create([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'password' => bcrypt($request->input('password')),
            ]);

            Auth::login($user);

            return redirect()->intended('/')->with('success', 'Votre compte à été crée, bienvenue.');;
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
