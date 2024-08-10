@extends('layout.app')

@section('content')
<div class="container">
    <h1>Questions for {{ $quiz->title }}</h1>
    <a href="{{ route('questions.create', $quiz) }}" class="btn btn-primary">Add Question</a>
    <ul>
        @foreach($questions as $question)
            <li>{{ $question->question }}
                <a href="{{ route('questions.edit', $question) }}" class="btn btn-secondary">Edit</a>
                <form action="{{ route('questions.destroy', $question) }}" method="POST" style="display:inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
</div>
@endsection
