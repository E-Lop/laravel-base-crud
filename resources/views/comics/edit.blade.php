@extends('layouts.app')

@section('main_content')

    <div class="container">
        <h1 class="text-center">Modifica del prodotto</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('comics.update', ['comic'=> $comic->id]) }}" method="post">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title') ? old('title') : $comic->title }}">
        </div>
        
        
        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea name="description" class="form-control" id="description" cols="30" rows="10">{{ old('description') ? old('description') : $comic->description }}</textarea>
        </div>
        
        <div class="mb-3">
            <label for="thumb" class="form-label">Url immagine</label>
            <input type="text" class="form-control" id="thumb" name="thumb" value="{{ old('thumb') ? old('thumb') : $comic->thumb }}">
        </div>
        
        <div class="mb-3">
            <label for="price" class="form-label">Prezzo</label>
            <input type="text" class="form-control" id="price" name="price" value="{{ old('price') ? old('price') : $comic->price }}">
        </div>
        
        <div class="mb-3">
            <label for="series" class="form-label">Serie</label>
            <input type="text" class="form-control" id="series" name="series" value="{{ old('series') ? old('series') : $comic->series }}">
        </div>
        
        <div class="mb-3">
            <label for="sale_date" class="form-label">Data di pubblicazione</label>
            <input type="date" class="form-control" id="sale_date" name="sale_date" value="{{ old('sale_date') ? old('sale_date') : $comic->sale_date }}">
        </div>
        
        <div class="mb-3">
            <label for="type" class="form-label">Tipo di prodotto</label>
            <input type="text" class="form-control" id="type" name="type" value="{{ old('type') ? old('type') : $comic->type }}">
        </div>
        

        <input type="submit" value="Salva">
    </form>
    </div>
    
@endsection