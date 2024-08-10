@extends('layout.app')
@extends('styleQuiz.style')

@section('content')
<div class="container">
    <h1>Quiz Resultat</h1>
    <p class="msg">Vous avez obtenu: {{ $score }}% </p>
    <a id="submit" class="submit" href="/ListeQuiz">Retour</a>
</div>
@endsection
