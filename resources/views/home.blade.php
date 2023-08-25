@extends('layouts.main')

@section('title', 'Home')

@section('main')
    <h1>Ecco tutti i treni!</h1>
    {{ $trains  }}
    @foreach ($trains as $train)
    <p> {{ $train->stazione_di_partenza }}</p>
        
    @endforeach
@endsection