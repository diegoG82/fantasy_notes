@extends('layouts.app')
@section('content')
<form  action="{{ route('notes.store') }}" method="POST">
    @csrf

    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" id="title" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="description">Description</label>
        <textarea name="description" id="description" class="form-control" required></textarea>
    </div>

    <div class="form-group">
        <label for="author">Author</label>
        <input type="text" name="author" id="author" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-primary">Create Note</button>
</form>

@endsection