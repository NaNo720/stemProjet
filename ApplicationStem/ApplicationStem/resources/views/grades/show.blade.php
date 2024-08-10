@extends('layout.app')

@section('content')
<div class="container">
    <h1>Grade Details</h1>
    <p>Quiz: {{ $grade->quiz->title }}</p>
    <p>Score: {{ $grade->score }}%</p>
    <p>Grade: {{ $grade->grade }}</p>
    <a href="{{ route('grades.index') }}" class="btn btn-secondary">Back to Grades</a>
</div>
@endsection
