@extends('layouts.app')

@section('main_content')
    <h1>{{ $comic->title }}</h1>

    <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">

    <div>Serie: {{ $comic->series }}</div>
    <div>Descrizione: {{ $comic->description }}</div>
@endsection