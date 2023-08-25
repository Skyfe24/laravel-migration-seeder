@extends('layouts.main')

@section('title', 'Home')

@section('main')
    <h1>Ecco tutti i treni!!</h1>
    {{ $trains  }}
    <p> {{ $train->stazione_di_partenza }}</p>
        
    @endforeach
@endsection