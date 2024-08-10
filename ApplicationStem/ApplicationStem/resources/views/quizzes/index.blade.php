@extends('layout.app')

@section('content')
<div class="container">
    <h1>Quiz</h1>
    <h4><a href="{{ route('questions.index', $quiz=1) }}">Creer Question</a></h4>
    <ul>
        @foreach($quizzes as $quiz)
            <li><a href="{{ route('quizzes.show', $quiz) }}">{{ $quiz->title }}</a></li>
        @endforeach
    </ul>
</div>
@endsection
