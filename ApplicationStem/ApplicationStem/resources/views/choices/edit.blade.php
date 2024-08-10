@extends('layout.app')

@section('content')
<div class="container">
    <h1>Edit Choice</h1>
    <form action="{{ route('choices.update', $choice) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="choice">Choice</label>
            <input type="text" name="choice" id="choice" class="form-control" value="{{ $choice->choice }}" required>
        </div>
        <div class="form-group">
            <label for="is_correct">Is Correct</label>
            <input type="checkbox" name="is_correct" id="is_correct" @if($choice->is_correct) checked @endif>
        </div>
        <button type="submit" class="btn btn-primary">Update Choice</button>
    </form>
</div>
@endsection
