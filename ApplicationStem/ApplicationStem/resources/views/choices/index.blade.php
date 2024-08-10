@extends('layout.app')

@section('content')
<div class="container">
    <h1>Choices for "{{ $question->question }}"</h1>
    <a href="{{ route('choices.create', $question) }}" class="btn btn-primary">Add Choice</a>
    <ul>
        @foreach($choices as $choice)
            <li>{{ $choice->choice }} @if($choice->is_correct) <strong>(Correct)</strong> @endif
                <a href="{{ route('choices.edit', $choice) }}" class="btn btn-secondary">Edit</a>
                <form action="{{ route('choices.destroy', $choice) }}" method="POST" style="display:inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
</div>
@endsection
