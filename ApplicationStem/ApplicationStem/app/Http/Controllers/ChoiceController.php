<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Choice;
use Illuminate\Http\Request;

class ChoiceController extends Controller
{
    public function index(Question $question)
    {
        $choices = $question->choices;
        return view('choices.index', compact('question', 'choices'));
    }

    public function create(Question $question)
    {
        return view('choices.create', compact('question'));
    }

    public function store(Request $request, Question $question)
    {
        $request->validate([
            'choice' => 'required|string|max:255',
            'is_correct' => 'required|boolean',
        ]);

        $question->choices()->create($request->only('choice', 'is_correct'));

        return redirect()->route('choices.index', $question)->with('success', 'Choix créer avec succés.');
    }

    public function edit(Choice $choice)
    {
        return view('choices.edit', compact('choice'));
    }

    public function update(Request $request, Choice $choice)
    {
        $request->validate([
            'choice' => 'required|string|max:255',
            'is_correct' => 'required|boolean',
        ]);

        $choice->update($request->only('choice', 'is_correct'));

        return redirect()->route('choices.index', $choice->question)->with('success', 'Choice mis à jour avec succès.');
    }

    public function destroy(Choice $choice)
    {
        $choice->delete();
        return redirect()->route('choices.index', $choice->question)->with('success', 'Choice deleted successfully.');
    }
}
