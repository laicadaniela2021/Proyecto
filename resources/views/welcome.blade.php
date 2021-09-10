<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style type="text/css">
            html, body {
                background-image: url(https://cdn.pixabay.com/photo/2017/03/25/03/18/brick-2172682_1280.jpg);

                background-color: #fff;
                color: #54595c;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 85vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;

            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 10px;
            }

            .content {
                text-align: center;

            }

            .title {
                font-size: 90px;
            }

            .links > a {
                color: #eef0ed;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 10px;
            }
            .footerper{
                left: 0;
                bottom: 0;
                width: 100%;
                height: 100%;
                background-image: url('https://curmat.000webhostapp.com/img/footerespe.png');
                background-size: cover;
                color: white;
                text-align: center;
            }
        </style>
        <style type="text/css">
            .body {
                background-image: url(https://curmat.000webhostapp.com/img/fondoprincipal.jpg);
                background-size: cover;
                }
            }
        </style>
    </head>
    <body>
        <div class="body" >
            <header class="nav nav-pills nav-fill " style="background-color: #55c92a; color: white; margin: 0px; width: all; padding-left: 23px;padding-right: 23px" >
				<li class="nav-item" style="text-align: left; margin-bottom: -118px" >
				    <img src="https://www.espe-innovativa.edu.ec/ambiente/wp-content/uploads/logo-espe-blanco.png" alt="" style="max-width:50%; width:auto;height:35%;">
				</li>
				<li class="nav-item" style="text-align: right; padding-top: 16px">
                    @if (Route::has('login'))
                        <div class=" navbar top-right links  ">
                            @auth
                                <a href="{{ url('/home') }}">Home</a>
                            @else
                                <a href="{{ route('login') }}">Login</a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}">Register</a>
                                @endif
                            @endauth
                        </div>
                    @endif
				</li>

			</header>
                <nav class="navbar navbar-expand-md navbar-light bg-light" style="position: relative">
                    <a class="navbar-brand" href="#"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-menu-button-wide-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M14 7H2a1 1 0 0 0-1 1v5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V8a1 1 0 0 0-1-1zM2 6a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8a2 2 0 0 0-2-2H2z"/>
  <path fill-rule="evenodd" d="M15 11H1v-1h14v1zM2 12.5a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM1.5 0A1.5 1.5 0 0 0 0 1.5v2A1.5 1.5 0 0 0 1.5 5h13A1.5 1.5 0 0 0 16 3.5v-2A1.5 1.5 0 0 0 14.5 0h-13zm1 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1h-3zm9.927.427l.396.396a.25.25 0 0 0 .354 0l.396-.396A.25.25 0 0 0 13.396 2h-.792a.25.25 0 0 0-.177.427z"/>
</svg></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                        <a class="nav-item nav-link" href="{{route('reportes.index')}}">Reportes</a>
                        <a class="nav-item nav-link" href="{{route('campuses.index')}}">Campus</a>
                        <a class="nav-item nav-link" href="{{route('bars.index')}}">Bares</a>
                        <a class="nav-item nav-link" href="{{route('menus.index')}}">Menu</a>
                        <a class="nav-item nav-link" href="{{route('snacks.index')}}">Snacks</a>
                        <a class="nav-item nav-link" href="{{route('preferencias.index')}}">Preferencias</a>
                        </div>
                    </div>
                </nav>
            <div class="flex-center position-ref full-height " >


                <div class="content">
                    <h1 class="title m-b-md">
                        ESPE|bares
                    </h1>

                    <div class="portada" style="padding-top: 40px">
                        <h1 style="font-size: 220%">Tu opinión nos importa</h1><br>
                        <p>Para poder mejorar en nuestra calidad de atencion al cliente</p>
                        <p>necesitamos tu opiniona continuacion<br>puedes ir al apartado de buzon.</p><br>

                    </div>
                    <a href="{{route('buzons.index')}}" class=" btn btn-warning" style="margin-top: 40px; font-size: 150%"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-mailbox" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M4 4a3 3 0 0 0-3 3v6h6V7a3 3 0 0 0-3-3zm0-1h8a4 4 0 0 1 4 4v6a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V7a4 4 0 0 1 4-4zm2.646 1A3.99 3.99 0 0 1 8 7v6h7V7a3 3 0 0 0-3-3H6.646z"/>
                        <path fill-rule="evenodd" d="M11.793 8.5H9v-1h5a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.354-.146l-.853-.854z"/>
                        <path d="M5 7c0 .552-.448 0-1 0s-1 .552-1 0a1 1 0 0 1 2 0z"/>
                        </svg> Buzón
                    </a>
                </div>
            </div>
        </div>
        <div>
        <div class="p-2 mb-1 bg-dark "></div>
        <div class="container resto" style=" background-color: white; margin: 20px auto; border-radius: 20px; margin-top: 40px">
            <h1 style=" text-align: center;border-bottom:solid 5px rgba(43, 92, 189,1);"><strong>Bienvenidos</strong>  </h1><br>
            <div class="row">
                <div class="col-sm text-center" >
                    <div class="card" style="width: 25rem;">
                    <h2 class="card-title"><strong>Menus </strong> </h2>
                        <div class="card-body text-left">

                            @foreach($campuses as $campus)
                                <h3>Campus: {{$campus->nombre}}</h3>

                                @foreach($bars as $bar)
                                    @if(strcmp($campus->nombre, $bar->campus->nombre) === 0)
                                        <h4>&nbsp;&nbsp;&nbsp;&nbsp;  Bar: {{$bar->nombre}}</h4>
                                        @foreach($menus as $menu)
                                            @if(strcmp($bar->nombre, $menu->bar->nombre) === 0)

                                                &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;{{$menu->nombre}}: {{$menu->precio}}$ <br>
                                            @endif
                                        @endforeach
                                    @endif
                                @endforeach
                            @endforeach

                        </div>
                    </div>
                </div>
                <div class="col-sm text-center" >
                    <div class="card" style="width: 25rem;">
                    <h2 class="card-title"><strong>Snacks</strong> </h2>
                        <div class="card-body text-left">
                            @foreach($campuses as $campus)
                                <h3>Campus: {{$campus->nombre}}</h3>

                                @foreach($bars as $bar)
                                    @if(strcmp($campus->nombre, $bar->campus->nombre) === 0)
                                        <h4>&nbsp;&nbsp;&nbsp;&nbsp; Bar: {{$bar->nombre}}</h4>
                                        @php($i=1)
                                        @foreach($snacks as $snack)
                                            @if(strcmp($bar->nombre, $snack->bar->nombre) === 0)

                                                @if($i<=3)
                                                    &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;{{$snack->nombre}}: {{$snack->precio}}$ <br>

                                                @endif
                                                @php($i+=1)
                                            @endif
                                        @endforeach
                                    @endif
                                @endforeach
                            @endforeach
                            <a href="example" class="btn btn-primary btn-block">Ver mas</a>

                        </div>
                    </div>
                </div>

            </div><br>

        </div>
        <div class="footerper"><br><br>
        <div class="row">
            <div class="col-sm text-center">
                <h2>Registro de Membresía</h2>
                <p>Beneficios de Membresía de la Comunidad</p>
                <ul text="right">
                    <p ><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-award-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path d="M8 0l1.669.864 1.858.282.842 1.68 1.337 1.32L13.4 6l.306 1.854-1.337 1.32-.842 1.68-1.858.282L8 12l-1.669-.864-1.858-.282-.842-1.68-1.337-1.32L2.6 6l-.306-1.854 1.337-1.32.842-1.68L6.331.864 8 0z"/>
  <path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1 4 11.794z"/>
</svg> Accede al buzón de recetas y otros servicios</p>
                    <p ><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-award-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path d="M8 0l1.669.864 1.858.282.842 1.68 1.337 1.32L13.4 6l.306 1.854-1.337 1.32-.842 1.68-1.858.282L8 12l-1.669-.864-1.858-.282-.842-1.68-1.337-1.32L2.6 6l-.306-1.854 1.337-1.32.842-1.68L6.331.864 8 0z"/>
  <path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1 4 11.794z"/>
</svg> Califica y reseña recetas</p>
                    <p ><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-award-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path d="M8 0l1.669.864 1.858.282.842 1.68 1.337 1.32L13.4 6l.306 1.854-1.337 1.32-.842 1.68-1.858.282L8 12l-1.669-.864-1.858-.282-.842-1.68-1.337-1.32L2.6 6l-.306-1.854 1.337-1.32.842-1.68L6.331.864 8 0z"/>
  <path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1 4 11.794z"/>
</svg> Recibe el boletín mensual con recetas y ofertas</p>
                </ul>
                <button class="btn btn-primary">DOWNLOAD APP</button>
            </div>
            <div class="col-sm text-center" >
                <table class="table" style="color: white;">
                    <thead>
                        <tr>
                        <th scope="col">desde las 7 y 30am</th>
                        <th scope="col"><h5>Horario de Atencion</h5></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <td>desde las 8:00AM</td>
                        <td><h5>Desayuno</h5></td>
                        </tr>
                        <tr>
                        <td>desde las 12:00AM</td>
                        <td><h5>Almuerzo</h5></td>
                        </tr>
                        <tr>
                        <td>hasta las 17:00PM</td>
                        <td><h5>Horario de cierre</h5></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>


                        <section>
                            <h2>Conéctate con nosotros</h2>
                                <a href="https://www.facebook.com">
                                    <img src="https://curmat.000webhostapp.com/img/facebook.png">
                                </a>
                                <a href="https://www.youtube.com">
                                    <img src="https://curmat.000webhostapp.com/img/youtube.png">
                                </a>
                        </section>


                            <section>
                                <div>2020</div>
                                <div>Todos los derechos y propiedad intelectual de este sitio son de EDISON PACA Y ANGEL ECHEVERRIA</div>
                            </section>


        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </body>
</html>
