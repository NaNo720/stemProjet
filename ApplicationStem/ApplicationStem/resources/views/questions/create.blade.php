@extends('layout.app')

@section('content')
<div class="container">
    <h1>Create Question for {{ $quiz->title }}</h1>
    <form action="{{ route('questions.store', $quiz) }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="question">Question</label>
            <input type="text" name="question" id="question" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Ajouter Question</button>
    </form>
</div>
@endsection


{{--  <!-- Vue pour ajouter des questions à un quiz -->
<h1>Create Question for {{ $quiz->title }}</h1>

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<div>
    <label for="question">Question</label>
    <input type="text" name="question" id="question" class="form-control" required>
</div>

<button onclick="addQuestion()" class="btn btn-primary">Add Question</button>

<script>
    function addQuestion() {
        var question = document.getElementById('question').value;

        // Envoyer la requête Ajax pour ajouter la question
        axios.post('{{ route("questions.store", $quiz) }}', {
            question: question,
            _token: '{{ csrf_token() }}'
        })
        .then(function (response) {
            // Succès de la requête
            console.log(response.data);
            alert('Question added successfully.');
            // Recharger la page ou mettre à jour la liste des questions si nécessaire
            location.reload();
        })
        .catch(function (error) {
            // Gestion des erreurs
            console.error(error);
            alert('Error adding question.');
        });
    }
</script> --}}

