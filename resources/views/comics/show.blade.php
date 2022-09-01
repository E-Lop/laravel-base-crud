@extends('layouts.app')

@section('main_content')
    <div class="container">
        <h1>{{ $comic->title }}</h1>

    <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
    <div>Titolo: {{$comic->title}}</div>
    <div>Serie: {{$comic->series}}</div>
    <div>Prezzo: {{$comic->price}}$</div>
    <div>Data di pubblicazione: {{$comic->sale_date}}</div>
    <div>Tipo di prodotto: {{$comic->type}}</div>
    <div>Descrizione: {{ $comic->description }}</div>
    </div>
@endsection