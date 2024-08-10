<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        // Validation des données de la requête
        $request->validate([
            'nom' => ['required', 'string', 'max:255'],
            'prenom' => ['required', 'string', 'max:255'],
            'role' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        // Création de l'utilisateur
        $user = User::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'role' => $request->role,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        //Déclenchement de l'événement Registered
        event(new Registered($user));

        //Connexion de l'utilisateur
        Auth::login($user);

        //Envoyer la notification de vérification de l'email
        $user->sendEmailVerificationNotification();

        // Redirection après inscription
        //return redirect(RouteServiceProvider::HOME);

        // Déconnecter l'utilisateur après l'inscription
        //Auth::logout();

        // Redirection après inscription
        return redirect('/login')->with('status', 'Un email de vérification a été envoyé à votre adresse email. Veuillez vérifier votre email.');

    }
}
