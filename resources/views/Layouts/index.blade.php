@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <nav class="navbar navbar-expand bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="/"><img src="{{asset('img/logo.png')}}"></a>
           
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">


                    <li class="nav-item mx-5">
                        <a class="btn btn-primary btn-lg register" href="{{ route('notes.create')}}" role="button"><i class="bi bi-plus-circle-fill"></i>New Fantasy note...</a>
                    </li>
                </ul>
                <form class="d-flex" role="search" action="/">
                    <input class="form-control me-2" type="search"  name="search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

</div>

<div class="hero py-5">
    <h1 class="display-2 text-center my-5">WRITE YOUR FANTASY NOTE</h1>
    <h2 class="text-center">Want to give some epic note for new generations?</h2>
    <div class="d-flex justify-content-center  my-5">
        <button  type="button" class="btn btn-warning register btn-lg">Register</button>
    </div>
</div>

<div class="container">
    <div class="row">
        @foreach ($notes as $note)
            <div class="col-md-4 mt-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $note->title }}</h5>
                        <p class="card-text">{{ $note->description }}</p>
                        <p class="card-text">Author:{{ $note->author }}</p>
                        <p class="card-text">Created :{{ $note->created_at }}</p>
                        <a href="{{ route('notes.show', $note->id) }}" class="btn btn-success">Visualizza</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>





<footer class="py-3">

    <div class="row">
        <div class="col-md-5 col-sm-4"></div>

            <p class="text-white text-center"><>Copyright&copy; Diego G.</p>
    
        </div>
   

    </div>
</footer>
    
@endsection