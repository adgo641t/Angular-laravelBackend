<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.cdnfonts.com/css/games" rel="stylesheet">
        <title>@yield('title')</title>
    </head>
    
    <body>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="{{route('welcome')}}">MultiGames <i class="fa fa-codepen"></i></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto ml-auto">
            <li class="nav-item">
                <div class="justify-content-md-center">
                    <form action="https://www.google.com/search" method="GET" class="d-flex form-inline my-2 my-lg-0 my-lg-0">
                        <input class="form-control mr-2" type="text" placeholder="Search Anything..." aria-label="Search" id="search" name="q" style="width: 600px;">
                        <button class="btn btn-info my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>
            </li>
        </ul>
    </div>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item active">
              <a class="nav-link" href="{{route('welcome')}}">Home <span class="sr-only">(current)</span></a>
            </li>
            @guest
            <li class="nav-item">
              <a class="nav-link" href="{{route('login')}}">Login</a>
            </li>
            @endguest
            @auth
                <li class="nav-item">
                  <a class="nav-link" href="{{ url("logout") }}">logout</a>
                </li>
            @endauth
            <li class="nav-item">
              <a class="nav-link" href="{{route('register')}}">Register</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('Show')}}">Show Game</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('ShowUsers')}}">Users</a>
            </li>
          </ul>
        </div>
      </nav>
        @yield('content')
    </body>
</html>