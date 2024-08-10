@extends('layout.app')

@section('content')
<div class="container">
    <h1>Your Answers</h1>
    <ul>
        @foreach($userAnswers as $answer)
            <li>
                Question: {{ $answer->question->question }} <br>
                Your Answer: {{ $answer->choice->choice }} <br>
                @if($answer->choice->is_correct)
                    <span style="color: green;">Correct</span>
                @else
                    <span style="color: red;">Incorrect</span>
                @endif
            </li>
        @endforeach
    </ul>
</div>
@endsection
