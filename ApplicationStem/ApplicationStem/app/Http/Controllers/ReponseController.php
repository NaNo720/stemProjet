<?php

namespace App\Http\Controllers;

use App\Models\Reponse;
use Illuminate\Http\Request;

class ReponseController extends Controller
{
    public function index()
    {
        $userAnswers = UserAnswer::where('user_id', auth()->id())->get();
        return view('user_answers.index', compact('userAnswers'));
    }
}
