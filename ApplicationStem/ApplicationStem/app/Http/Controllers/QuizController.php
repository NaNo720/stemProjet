<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use Illuminate\Http\Request;
use App\Models\Choice;
use App\Models\Reponse;
use App\Models\Grade;

class QuizController extends Controller
{



    //function pour enregistrer les quiz dans la base de données
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $quiz = Quiz::create([
            'title' => $request->title,
            'description' => $request->description,
        ]);

        return redirect()->route('quizzes.create')->with('success', 'Quiz créer avec succés.');
    }


    public function index()
    {
        $quizzes = Quiz::all();
        return view('quizzes.index', compact('quizzes'));
    }

    public function create()
    {
        return view('quizzes.create');
    }

    public function show(Quiz $quiz)
    {
        $questions = $quiz->questions()->with('choices')->get();
        return view('quizzes.show', compact('quiz', 'questions'));
    }

    public function submit(Request $request, Quiz $quiz)
    {
        $correctAnswers = 0;
        foreach ($request->questions as $questionId => $choiceId) {
            $choice = Choice::find($choiceId);
            Reponse::create([
                'user_id' => auth()->id(),
                'question_id' => $questionId,
                'choice_id' => $choiceId,
            ]);
            if ($choice->is_correct) {
                $correctAnswers++;
            }
        }
        $totalQuestions = count($request->questions);
        $score = ($correctAnswers / $totalQuestions) * 100;


        return redirect()->route('quizzes.result', ['quiz' => $quiz, 'score' => $score]);
    }

    public function result(Request $request, Quiz $quiz)
    {
        $score = $request->score;
        return view('quizzes.result', compact('quiz', 'score'));
    }

}
