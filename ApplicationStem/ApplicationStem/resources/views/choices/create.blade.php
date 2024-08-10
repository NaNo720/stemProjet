@extends('layout.app')

@section('content')
<div class="container">
    <h1>Add Choice for "{{ $question->question }}"</h1>
    <form action="{{ route('choices.store', $question) }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="choice">Choice</label>
            <input type="text" name="choice" id="choice" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="is_correct">Is Correct</label>
            <input type="checkbox" name="is_correct" id="is_correct">
        </div>
        <button type="submit" class="btn btn-primary">Add Choice</button>
    </form>
</div>
@endsection
