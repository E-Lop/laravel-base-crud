@extends('layouts.app')

@section('main_content')
    <div class="container">
        @if ($deleted === 'yes')
            <div class="alert alert-success" role="alert">
                Fumetto eliminato con successo
            </div>
        @endif


        <h1 class="text-center">Ecco i nostri fumetti</h1>
        
        <div class="row row-cols-3 gy-4">
            @foreach ($comics as $comic)
                {{-- single comic card --}}
                <div class="col">
                    <div class="card">
                        <div>
                            <div><img class="mx-auto d-block" src="{{$comic->thumb}}" alt="{{$comic->title}}"></div>
                            <div>Titolo: {{$comic->title}}</div>
                            <div>Serie: {{$comic->series}}</div>
                            <div>Prezzo: {{$comic->price}}$</div>
                        </div>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                            <a class="btn btn-success" href="{{ route('comics.show', ['comic' => $comic->id]) }}">Scopri di più</a>
                        </div>
                
                        <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                            <a class="btn btn-warning" href="{{ route('comics.edit', ['comic' => $comic->id]) }}">Modifica prodotto</a>
                        </div>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                            <form action="{{ route('comics.destroy', ['comic' => $comic->id]) }}" method="post">
                                @csrf
                                @method('DELETE')
                
                                <input class="btn btn-danger" type="submit" value="Cancella" onclick="return confirm('Confermi di voler cancellare?');">
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    
    </div>
@endsection