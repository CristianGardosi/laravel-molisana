{{-- Default layout from main.blade.php --}}
@extends('layouts.main')

{{-- Specific contents for HOMEPAGE (Pasta Cards) --}}
@section('content')
    <div class="background">
        @include('partials.cards', ['cards' => $lunghe, 'title' => 'Le Lunghe']);
        @include('partials.cards', ['cards' => $corte, 'title' => 'Le Corte']);
        @include('partials.cards', ['cards' => $cortissime, 'title' => 'Le Cortissime']);
    </div>

@endsection

