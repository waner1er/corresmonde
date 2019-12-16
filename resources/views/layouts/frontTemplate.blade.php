<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/sandstone.css">
    <link rel="stylesheet" href="css/correstyle.css">


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
    <script src="https://maps.google.com/maps/api/js?key=AIzaSyDOFiQ2FjQlGdyihZp4FV_cLqGAQWgISfk" type="text/javascript"></script>
    <style type="text/css">
        #map{ /* la carte DOIT avoir une hauteur sinon elle n'apparaît pas */
            height:600px;
        }
    </style>
</head>

<body>

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="/">Corresmonde(logo)</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                      <a class="nav-link" href="/projet">Le projet</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Déroulé du projet </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Espace docs</a>
                    </li>

                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="ressources" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Travaux d'élèves
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/ressources">Travaux des collégiens</a>
                        <a class="dropdown-item" href="/map">Travaux de la MAST</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Portfolio des rencontres? </a>
                      </div>
                    </li>
                </ul>

                    <ul class="navbar-nav ">
                            @if (Route::has('login'))
                                        @auth
                                        <li>
                                        <a class="nav-link text-warning" href="/admin">Espace d'administration </a>
                                        </li>

                                        <li>
                                                <a class="nav-link text-danger" href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                                {{ __('Se déconnecter') }}
                                                </a>

                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    @csrf
                                                </form>
                                        </li>


                                    @else
                                        <li><a class="nav-link text-success" href="{{ route('login') }}">Connexion</a></li>


                                    @endauth

                            @endif
                    </li>
                </ul>




                </div>
              </nav>



        <div class="content">
                @yield('content')
        </div>



    <script  src="https://code.jquery.com/jquery-3.4.1.js"
            integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
            crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
            integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
            crossorigin="anonymous">
    </script>
    <script src="js/map.js"></script>


</body>
</html>
