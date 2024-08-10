@extends('layout.app')

@section('content')
<div class="container">
    <h1>Edit Question</h1>
    <form action="{{ route('questions.update', $question) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="question">Question</label>
            <input type="text" name="question" id="question" class="form-control" value="{{ $question->question }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update Question</button>
    </form>
</div>
@endsection
