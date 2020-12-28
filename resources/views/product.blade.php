{{-- Default layout from main.blade.php --}}
@extends('layouts.main')

{{-- Specific contents for HOMEPAGE (Pasta Cards) --}}
@section('content')
    {{-- Second dynamic class = past type to assign specific color for each different type --}}
    
    <section class="product-details {{ $product['src-h'] }}">
        <div class="container">
            <div class="hero">
                <h1>{{ $product['titolo'] }}</h1>
                <img src="{{ $product['src-h'] }}" alt="{{ $product['titolo'] }}">
                <img src="{{ $product['src-p'] }}" alt="{{ $product['titolo'] }}">
                <div class="description">
                    <p class="prod-description">
                        {{-- Escaping html --}}
                        {!! $product['descrizione'] !!}
                    </p>
                </div>
                {{-- Prev / next --}}
                <div class="prev-next">
                    @if ($id > 0) 
                        <a class="precedente" href="{{ route('product', $id - 1) }}">
                            Prodotto precedente
                        </a>
                    @endif
                    @if ($id < $length) 
                        <a class="successivo" href="{{ route('product', $id + 1) }}">
                            Prodotto Successivo
                        </a>
                    @endif
                </div>
            </div>
        </div>
    </section>

@endsection