<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="correstyle.css">
    <title>D'une terre à l'autre Corresmonde </title>
    <script src="https://maps.google.com/maps/api/js?key=AIzaSyDOFiQ2FjQlGdyihZp4FV_cLqGAQWgISfk" type="text/javascript"></script>



</head>

<body>
<style>
    .container{padding: 0;    overflow: hidden;}
    .container p img,{max-width: 900px;width: 60%;height: auto;margin: 1rem;}
    .footer {position: absolute;bottom: 0;width: 100%;height: 60px;background: #000000;color: #FFFFFF;}
</style>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href=" {{ url('/') }} "><img src="img/LOGO.png" width="100"alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                      <a class="nav-link" href=" {{ url('projet') }}">Le projet</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{ url('deroule') }}">Déroulé du projet </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{ url('understanding') }}">Comprendre les migrations </a>
                    </li>

                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="ressources" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Travaux d'élèves
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ url('/ressources') }}">Parcours</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ url('/source') }}">Source des travaux d'élèves</a>

                      </div>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="ressources" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        La MAST
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ url('/periple') }}">Périples (Exposition 2019)</a>

                      </div>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{ url ('rencontre') }} ">Portfolio </a>
                    </li>
                </ul>

                    <ul class="navbar-nav ">
                            @if (Route::has('login'))
                                        @auth
                                        <li>
                                        <a class="nav-link text-success" href="/admin">Espace d'administration </a>
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
                                        <li><a class="nav-link text-success" href="/admin">espace élèves</a></li>


                                    @endauth

                            @endif
                    </li>
                </ul>




                </div>
              </nav>



        <div class="container p-4 ">
                @yield('content')
        </div>

            <div class="footer-copyright text-center py-3">© 2020 Copyright:
            <a href="http://myportfolio.riveterwan.ovh"> Erwan RIVET</a>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js"></script>


    <script>
        $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                event.preventDefault();
                $(this).ekkoLightbox();
            });
    </script>
    <script>

    </script>

</body>
</html>
