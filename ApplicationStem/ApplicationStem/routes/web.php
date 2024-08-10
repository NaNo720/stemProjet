<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\ChoiceController;
use App\Http\Controllers\ReponseController;
use App\Http\Controllers\GradeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/ListeTP', function () {
    return view('ListeTP');
});

Route::get('/ListeQuiz', function () {
    return view('ListeQuiz');
});

Route::get('/ResultatsQuiz', function () {
    return view('ResultatsQuiz');
});



Route::middleware(['auth'])->group(function () {

    //Routes pour les quiz
    Route::get('/quizzes', [QuizController::class, 'index'])->name('quizzes.index');
    //Route pour créer le quiz
    Route::get('/quizzes/create', [QuizController::class, 'create'])->name('quizzes.create');
    //Route pour enregistrer le quiz
    Route::post('/quizzes', [QuizController::class, 'store'])->name('quizzes.store');
    Route::get('/quizzes/{quiz}', [QuizController::class, 'show'])->name('quizzes.show');
    Route::post('/quizzes/{quiz}/submit', [QuizController::class, 'submit'])->name('quizzes.submit');
    Route::get('/quizzes/{quiz}/result', [QuizController::class, 'result'])->name('quizzes.result');


    // Routes pour les questions
    Route::get('/quizzes/{quiz}/questions', [QuestionController::class, 'index'])->name('questions.index');
    Route::get('/quizzes/{quiz}/questions/create', [QuestionController::class, 'create'])->name('questions.create');
    Route::post('/quizzes/{quiz}/questions', [QuestionController::class, 'store'])->name('questions.store');
    Route::get('/questions/{question}/edit', [QuestionController::class, 'edit'])->name('questions.edit');
    Route::put('/questions/{question}', [QuestionController::class, 'update'])->name('questions.update');
    Route::delete('/questions/{question}', [QuestionController::class, 'destroy'])->name('questions.destroy');

    // Routes pour les choix de réponses
    Route::get('/questions/{question}/choices', [ChoiceController::class, 'index'])->name('choices.index');
    Route::get('/questions/{question}/choices/create', [ChoiceController::class, 'create'])->name('choices.create');
    Route::post('/questions/{question}/choices', [ChoiceController::class, 'store'])->name('choices.store');
    Route::get('/choices/{choice}/edit', [ChoiceController::class, 'edit'])->name('choices.edit');
    Route::put('/choices/{choice}', [ChoiceController::class, 'update'])->name('choices.update');
    Route::delete('/choices/{choice}', [ChoiceController::class, 'destroy'])->name('choices.destroy');

    // Routes pour les réponses des utilisateurs
    Route::get('/user-answers', [ReponseController::class, 'index'])->name('user_answers.index');

    // Routes pour les notes
    Route::get('/grades', [GradeController::class, 'index'])->name('grades.index');
    Route::get('/grades/{grade}', [GradeController::class, 'show'])->name('grades.show');
    Route::post('/grades', [GradeController::class, 'store'])->name('grades.store');
});




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//Route pour la vérification de l'email de l'inscription
Route::get('/email/verify', [VerificationController::class, 'show'])->name('verification.notice');
Route::get('/email/verify/{id}/{hash}', [VerificationController::class, 'verify'])->name('verification.verify')->middleware(['signed', 'throttle:6,1']);
Route::post('/email/resend', [VerificationController::class, 'resend'])->name('verification.resend')->middleware('throttle:6,1');

//verification email
Route::get('/verification/verify', [VerificationController::class, 'verify'])->name('verification.verify');

/* Route::get('/dashboard', function () {
    return view('dashboard');
    // Seulement les utilisateurs vérifiés peuvent accéder à cette route
})->middleware('verified'); */

require __DIR__.'/auth.php';
