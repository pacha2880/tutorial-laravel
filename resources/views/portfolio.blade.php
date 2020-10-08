@extends('layout')

@section('title', 'Portfolio')

@section('content')
    <h1>Portfolio</h1>

    <ul>
        {{-- @if($portfolio)
            @foreach ($portfolio as $portfolioItem)
                <li>{{ $portfolioItem['title'] }}</li>
            @endforeach
        @else
            <li>No hay proyectos para mostras</li>
        @endif --}}
        @forelse ($portfolio as $portfolioItem)
            <li>{{ $portfolioItem['title'] }} <small>{{ $loop->first ? "es el primero :v" : "" }}</small></li>
        @empty
            <li>No hay proyectos para mostras</li>
        @endforelse
    </ul>

@endsection