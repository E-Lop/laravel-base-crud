@extends('layouts.app')

@section('main_content')
    <h1>Ecco i nostri fumetti</h1>
    
    @foreach ($comics as $comic)
        <div>
            <div>Titolo: {{$comic->title}}</div>
            <div><img src="{{$comic->thumb}}" alt="{{$comic->title}}"></div>
            <div>Serie: {{$comic->series}}</div>
            <div>Data di pubblicazione: {{$comic->sale_date}}</div>
            <div>Prezzo: {{$comic->price}}$</div>
            <div>Descrizione: {{$comic->description}}</div>
        </div>
        <br>
    @endforeach
@endsection