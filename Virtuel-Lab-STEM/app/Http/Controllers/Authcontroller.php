<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    /**
     * @throws ValidationException
     */
    public function register(Request $request): \Illuminate\Http\JsonResponse
   {

       // Validation des données
       $validator = Validator::make($request->all(), [
           'name' => 'required|string|max:255',
           'email' => 'required|string|email|max:255|unique:users,email',
           'password' => [
               'required',
               'confirmed',
               Password::min(8)->mixedCase()->numbers()->symbols(),
           ],
       ]);

       if ($validator->fails()) {
           throw new ValidationException($validator);
       }

       // Création de l'utilisateur
       $user = User::create([
           'name' => $request->name,
           'email' => $request->email,
           'password' => Hash::make($request->input('password')),
       ]);

       // Création du token
       $token = $user->createToken('main')->plainTextToken;

       // Retourner la réponse
       return response()->json([
           'user' => $user,
           'token' => $token,
       ], 201);
   }
}
