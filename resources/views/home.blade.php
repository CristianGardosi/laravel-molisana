{{-- Default layout from main.blade.php --}}
@extends('layouts.main')

{{-- Specific contents for HOMEPAGE (Pasta Cards) --}}
@section('content')
    @if (empty($lunghe) === false) 
        <section class="type-section container">
            <h2 class="section-title">Le Lunghe</h2>
            <div class="cards">
                @foreach($lunghe as $card)
                    <div class="card">
                        <img src="{{ $card['src'] }}" 
                        alt="{{ $card['titolo'] }}">
                        <h3> {{ $card['titolo'] }} </h3>
                        <a href="#">Vedi prodotto</a>
                    </div>
                @endforeach
            </div>
        </section>
    @endif
    @if (empty($corte) === false) 
        <section class="type-section container">
            <h2 class="section-title">Le Corte</h2>
            <div class="cards">
                @foreach($corte as $card)
                    <div class="card">
                        <img src="{{ $card['src'] }}" 
                        alt="{{ $card['titolo'] }}">
                        <h3> {{ $card['titolo'] }} </h3>
                        <a href="#">Vedi prodotto</a>
                    </div>
                @endforeach
            </div>
        </section>
    @endif
    @if (empty($cortissime) === false) 
        <section class="type-section container">
            <h2 class="section-title">Le Cortissime</h2>
            <div class="cards">
                @foreach($cortissime as $card)
                    <div class="card">
                        <img src="{{ $card['src'] }}" 
                        alt="{{ $card['titolo'] }}">
                        <h3> {{ $card['titolo'] }} </h3>
                        <a href="#">Vedi prodotto</a>
                    </div>
                @endforeach
            </div>
        </section>
    @endif

@endsection

