@extends('layout.app')
@extends('styleQuiz.style')
<body id="Body">

@section('content')
<a id="submit" class="submit" href="/ListeQuiz">
    <i class="fa fa-arrow-left" aria-hidden="true"></i> Retour
</a>
<div class="question">
    <h1 id="titre">{{ $quiz->title }}</h1>
    <form method="POST" action="{{ route('quizzes.submit', $quiz) }}">
        @csrf
        @foreach($questions as $question)
            <div class="container">
                <p id="question">{{$question->question }}</p>
                @foreach($question->choices as $choice)
                    <div class="choice-container">
                        <input class="choice-text" type="radio" name="questions[{{ $question->id }}]" value="{{ $choice->id }}">
                        <label class="choice-text">{{ $choice->choice }}</label>
                    </div>
                @endforeach
            </div>
        @endforeach
        <button id="submit" class="submit" type="submit">Submit</button>
        <p class="msg">Bonne chance à tous les élèves pour Ce Quiz!!!</p>
    </form>
</div>
@endsection

</body>
