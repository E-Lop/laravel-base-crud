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
        <div>
            <a href="{{ route('comics.show', ['comic' => $comic->id]) }}">Scopri di più</a>
        </div>

        <div>
            <a href="{{ route('comics.edit', ['comic' => $comic->id]) }}">Modifica prodotto</a>
        </div>
        <div>
            <form action="{{ route('comics.destroy', ['comic' => $comic->id]) }}" method="post">
                @csrf
                @method('DELETE')

                <input type="submit" value="Cancella" onclick="return confirm('Confermi di voler cancellare?');">
            </form>
        </div>
        <br>
    @endforeach
@endsection