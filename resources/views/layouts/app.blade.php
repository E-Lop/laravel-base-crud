<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta main_content="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DC Comics</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                  <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                  <a class="nav-link" href="{{ route('comics.index') }}">Comics</a>
                  <a class="nav-link" href="{{ route('comics.create') }}">Nuovo prodotto</a>                  
                </div>
              </div>
            </div>
          </nav>
    </header>
    
    <main>
        @yield('main_content')
    </main>
</body>
</html>