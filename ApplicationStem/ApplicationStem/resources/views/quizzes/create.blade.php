<!-- resources/views/quizzes/create.blade.php -->

@extends('layout.app')

@section('content')
    <h1>Create Quiz</h1>

    <form action="{{ route('quizzes.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="description" class="form-control" rows="3"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Create Quiz</button>
    </form>
@endsection
