<?php
// app/Http/Controllers/GradeController.php

namespace App\Http\Controllers;

use App\Models\Grade;
use Illuminate\Http\Request;

class GradeController extends Controller
{
    public function index()
    {
        $grades = Grade::where('user_id', auth()->id())->get();
        return view('grades.index', compact('grades'));
    }

    public function show(Grade $grade)
    {
        if ($grade->user_id != auth()->id()) {
            abort(403);
        }
        return view('grades.show', compact('grade'));
    }

    // Méthode pour créer une note
    public function store(Request $request)
    {
        $request->validate([
            'quiz_id' => 'required|exists:quizzes,id',
            'score' => 'required|numeric|min:0|max:100',
            'grade' => 'required|string|max:255',
        ]);

        // Créer une nouvelle note
        Grade::create([
            'user_id' => auth()->id(),
            'quiz_id' => $request->quiz_id,
            'score' => $request->score,
            'grade' => $request->grade,
        ]);

        return redirect()->route('grades.index')->with('success', 'Note créée avec succès.');
    }
}
