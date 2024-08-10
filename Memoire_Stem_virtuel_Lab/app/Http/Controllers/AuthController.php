<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;


class AuthController extends Controller
{
    public function register(Request $request): \Illuminate\Http\JsonResponse
    {
        $data = $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|email|unique:users',
            'password' => [
                'required|string|confirmed',
                Password::min(8)->mixedCase()->numbers()->symbols()
            ]
        ]);
/** @var \App\Models\User */
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ]);

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'user' => $user,
            'token' => $token
        ]);
    }
}
