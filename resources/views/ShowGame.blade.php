@extends('layout.navbar')

@section('content')

    <div class="container" style="font-family: 'Games', sans-serif;">
       <div class="row">
        <h1 style="text-align:center">Video of the game</h1>
        <div class="">
            <iframe class="d-block w-25 mx-auto ms-auto"  src="https://www.youtube.com/embed/G53bD9LRJ1Q" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>        
        </div>
       <br>
       <br>
       <br>
        <h1 style="text-align: center">The Winners Table</h1>
        <br>
        <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Game</th>
                    <th scope="col">Players</th>
                    <th scope="col">Date</th>
                    <th scope="col">Hour</th>
                    <th scope="col">Winner</th>
                </tr>
            </thead>
            <tbody>    
            @foreach($dataTable as $partida)
            <tr>
                <td 
                @if($partida->juego == 1)
                {{$partida->juego = 'Oca'}}
                @elseif($partida->juego == 2)
                {{$partida->juego = 'Pictionary'}}
                @endif>{{$partida->juego}}</td>
                <td>{{$partida->jugadores}}</td>
                <td>{{$partida->fecha}}</td>
                <td>{{$partida->hora}}</td>
                <td>{{$partida->ganador}}</td>
            </tr>  
        </tbody>       
            @endforeach
       </table>
       <br>
       <br>
       <br>
       </div>

       <h1 style="text-align: center">How to Find the University</h1>
       <br>
       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2993.3008908371335!2d2.113551415637059!3d41.389271503840874!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12a499516b19fb47%3A0xb0986fb4693842a4!2sUniversidad%20Polit%C3%A9cnica%20de%20Catalu%C3%B1a%20%C2%B7%20Barcelona%20Tech%20-%20UPC!5e0!3m2!1ses!2ses!4v1675616366434!5m2!1ses!2ses" width="700" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <br>   
    </div>
    <br>
    <br>
    <br>
    <br>
    <h1 style="text-align: center">About the Game</h1>
    <br>
    <br>
    <br>
    <br>
    <div style="display:flex" class="container col-lg-12 col-md-6 col-sm-3">
        <div style="" class="col-lg-6 col-md-3 ">
            <h3>The Game has called Multijuegosand have 3 Games Inside: </h3>
            <ul>Pictionary</ul>
            <ul>Tic Tac Toe</ul>
            <ul>Oca</ul>
            <p>And the rules of how to play are here:</p>
            <li>
                <p>OCA: El juego de la oca es un juego de mesa donde se necesitan al menos dos jugadores o más. Se popularizó principalmente en España, ya que hay la creencia de que este fue un modelo que se regaló a Felipe II de España en el 1587 aproximadamente.
                Cada jugador cuenta con una ficha, unos dados y unos dibujos. Es necesario lanzar unos dados para que tus fichas o personajes puedan avanzar de casilla y a lo largo de un tablero que se encuentra en forma de caracol.
                Dependiendo del lugar donde caiga la persona obtendrá un beneficio, una interrogante o una tarea por ejecutar. La persona que llega al jardín de la Oca será el ganador.</p>
            </li>
            <br>
            <li>
                <p>Pictionary: Pictionary es un juego de mesa creado por el inventor canadiense, Robert Angel, quien en 1985 lanzó lo que hoy es un fenómeno global 
                    que regala horas y horas de diversión. El objetivo es adivinar palabras por medio de dibujos, todo esto a contra tiempo. Se juega en equipos y 
                    puedes confiar en que, pondrá a prueba tu destreza, lógica, creatividad y trabajo en equipo, pues deberás recorrer todo el tablero con tu ficha hasta llegar a la casilla final.</p>
            </li>
            <br>
            <li>
                <p>Tic Tac Toe: Cada jugador elige las X o las O, y en su turno debe poner una, intentando conseguir 3 seguidas en una línea vertical, horizontal o diagonal. Una vez se llenan todos los espacios se termina la partida, finalizando en tablas si ninguno consigue enlazar tres de sus fichas seguidas</p>
            </li>
        </div>
        <div class="col-lg-6 col-md-3" style="display:block; align-items:center;justify-content:center;">
            <img style="width:100%" style="float: rigth" src="https://38.media.tumblr.com/67c45b454f960b88e7d7131df39ff35d/tumblr_negytpz7JM1s335jfo10_r1_500.gif" alt="">
            <br>
            <br>
            <br>
            <div style="display:flex; align-items:center;justify-content:center;">
                <a href="https://github.com/enricguasch/-SO-Project_group_8">
                    <button type="button" class="btn btn-outline-danger">¡Go To the Game!</button>
                </a>        
            </div>
        </div>
    </div>
    <br>

    <br>
    <br>
    <br>
    </div>
@endsection

<footer class="text-center text-white" style="background-color: #f1f1f1;   position: fixed;
   bottom: 0;
   width: 100%;">

  <!-- Copyright -->
  <div class="text-center text-dark p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2023 Copyright:<b> Diseñado por Adrian</b>
  </div>
  <!-- Copyright -->
    </footer>
