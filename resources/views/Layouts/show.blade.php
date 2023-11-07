@extends('layouts.app')

@section('content')
    <div class="container">

      

        <div class="card mt-4">

            <div class="card-body">

                <h5 class="card-title">{{ $note->title }}</h5>
                <p class="card-text">{{ $note->description }}</p>
                <p class="card-text">Author:{{ $note->author }}</p>
                <p class="card-text">Created :{{ $note->created_at }}</p>
                <form method="POST" action="{{ route('notes.destroy', ['note' => $note->id])">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete Note</button>
                </form>
                <a href="{{ route('notes.index') }}" class="btn btn-success">Turn back</a>
    
            </div>


           
        </div>

   

    </div>

@endsection
