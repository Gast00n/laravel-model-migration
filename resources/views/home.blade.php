@extends('layouts.main')

@section('content')
    <h1>Car of your dreams!</h1>
    
    <h2>Our Cars</h2>
    <ul>
        @foreach ($cars as $car)
        <li>
            <h3>{{ $car->modello }}</h3>
            <div class="brand">{{ $car->marca }}</div>
            <div class="plate">{{ $car->targa }}</div>
        </li> 
        @endforeach
    </ul>
@endsection
