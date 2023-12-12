@extends('layouts.app')

@section('content')

<section class="p-3">
    <div class="container">
        <h1 class="text-uppercase">I miei film</h1>
        <div class="row row-gap-3">
            @forelse ($movies as $movie)
            <div class="col-3">
                <div class="card h-100 p-2">
                    <h6><strong>Titolo:</strong> {{ $movie->title }}</h6>
                    <p><strong>Titolo originale:</strong> {{ $movie->original_title }}</p>
                    <p><strong>Lingua:</strong> {{ $movie->nationality }}</p>
                    <p><strong>Data uscita:</strong> {{ $movie->date }}</p>
                    <p><strong>Valutazione:</strong> {{ $movie->vote }}</p>
                </div>
                </div>                
            @empty
                <p>Non ci sono film</p>
            @endforelse      
        </div>
    </div>
</section>
    
@endsection