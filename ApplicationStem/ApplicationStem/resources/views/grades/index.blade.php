@extends('layout.app')

@section('content')
<div class="container">
    <h1>Your Grades</h1>
    <ul>
        @foreach($grades as $grade)
            <li>
                Quiz: {{ $grade->quiz->title }} <br>
                Score: {{ $grade->score }}% <br>
                Grade: {{ $grade->grade }}
                <a href="{{ route('grades.show', $grade) }}" class="btn btn-secondary">Details</a>
            </li>
        @endforeach
    </ul>
</div>
@endsection
