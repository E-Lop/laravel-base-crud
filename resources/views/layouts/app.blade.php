<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta main_content="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DC Comics</title>
</head>
<body>
    <header>
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('comics.index') }}">Comics</a>
        <a href="{{ route('comics.create') }}">Nuovo prodotto</a>
    </header>
    
    <main>
        @yield('main_content')
    </main>
</body>
</html>