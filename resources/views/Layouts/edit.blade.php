@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Edit Note</h2>

        <form method="POST" action="{{ route('notes.update', $note->id) }}">
            @csrf
            @method('PUT') <!-- Metodo HTTP PUT per l'aggiornamento -->

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" class="form-control" value="{{ $note->title }}" required>
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" id="description" class="form-control" required>{{ $note->description }}</textarea>
            </div>

            <div class="form-group">
                <label for="author">Author</label>
                <input type="text" name="author" id="author" class="form-control" value="{{ $note->author }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Update Note</button>
        </form>
    </div>
@endsection
