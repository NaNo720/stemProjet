@extends('layout.app')

@section('content')
<div class="container">
    <h1>Create Grade</h1>
    <form action="{{ route('grades.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="quiz_id">Quiz</label>
            <select name="quiz_id" id="quiz_id" class="form-control" required>
                @foreach($quizzes as $quiz)
                    <option value="{{ $quiz->id }}">{{ $quiz->title }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="score">Score (%)</label>
            <input type="number" name="score" id="score" class="form-control" min="0" max="100" required>
        </div>

        <div class="form-group">
            <label for="grade">Grade</label>
            <input type="text" name="grade" id="grade" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Add Grade</button>
    </form>
</div>
@endsection
