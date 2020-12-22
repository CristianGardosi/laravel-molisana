{{-- Default layout from main.blade.php --}}
@extends('layouts.main')

{{-- Specific contents for HOMEPAGE (Pasta Cards) --}}
@section('content')
    <div class="container">
        <div class="cards">
            @foreach($cards as $card)
                <div class="card">
                    <img src="{{ $card['src'] }}" 
                    alt="{{ $card['titolo'] }}">
                    <h2> {{ $card['titolo'] }} </h2>
                    <a href="#">Vedi prodotto</a>
                </div>
            @endforeach
        </div>
    </div>
       

@endsection

