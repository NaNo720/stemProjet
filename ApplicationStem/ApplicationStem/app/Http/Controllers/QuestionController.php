<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index(Quiz $quiz)
    {
        $questions = $quiz->questions;
        return view('questions.index', compact('quiz', 'questions'));
    }

    public function create(Quiz $quiz)
    {
        return view('questions.create', compact('quiz'));
    }

    public function store(Request $request, Quiz $quiz)
    {
        $request->validate([
            'question_text' => 'required|string',
        ]);

        // Créer une nouvelle question pour le quiz
        $question = new Question();
        $question->question_text = $request->question;
        $question->quiz_id = $quiz->id;
        $question->save();

        return response()->json(['message' => 'Question added successfully.']);
    }

    /* public function store(Request $request, Quiz $quiz)
    {
        $request->validate([
            'question' => 'required|string|max:255',
        ]);

        $quiz->questions()->create($request->only('question'));

        return redirect()->route('questions.index', $quiz)->with('success', 'Question created successfully.');
    } */

    public function edit(Question $question)
    {
        return view('questions.edit', compact('question'));
    }

    public function update(Request $request, Question $question)
    {
        $request->validate([
            'question' => 'required|string|max:255',
        ]);

        $question->update($request->only('question'));

        return redirect()->route('questions.index', $question->quiz)->with('success', 'Question updated successfully.');
    }

    public function destroy(Question $question)
    {
        $question->delete();
        return redirect()->route('questions.index', $question->quiz)->with('success', 'Question deleted successfully.');
    }
}
