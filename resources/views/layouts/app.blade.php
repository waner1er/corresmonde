<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/sandstone.css">
    <link rel="stylesheet" href="css/adminCss.css">
    <script src="https://kit.fontawesome.com/0cede21d6d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Document</title>
</head>
<style>

</style>
<body>

        <div class="d-flex" id="wrapper">

                <!-- Sidebar -->
                <div class="bg-light border-right" id="sidebar-wrapper">
                  <div class="sidebar-heading text-success">Tableau de bord </div>
                  <div class="list-group list-group-flush">
                    <a href="/admin" class="list-group-item list-group-item-action bg-light">Tableau principal</a>
                    <a href="/projects" class="list-group-item list-group-item-action bg-light">Objectifs du projet</a>
                    <a href="/admin" class="list-group-item list-group-item-action bg-light">Déroulé du projet</a>
                    <a href="/products" class="list-group-item list-group-item-action bg-light">Travaux des collégiens</a>
                    <a href="/quatrieme" class="list-group-item list-group-item-action bg-light">Quatrième</a>
                    <a href="cinquieme" class="list-group-item list-group-item-action bg-light">Cinquième</a>
                  </div>
                </div>
                <!-- /#sidebar-wrapper -->

                <!-- Page Content -->
                <div id="page-content-wrapper">

                  <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                    <button class="btn btn-primary" id="menu-toggle"><i class="fas fa-arrow-left"></i>  Barre de menu</button>

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <ul class="navbar-nav ml-auto mt-2 mt-lg-0">

                        <li class="nav-item active">
                          <a class="nav-link" href="/">Retour au site <span class="sr-only">(current)</span></a>
                        </li>

                        <ul class="navbar-nav">
                            <!-- Authentication -->
                            @guest
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }} <span class="caret"></span>

                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                        </ul>
                      </ul>
                    </div>
                    <!-- Right Side Of Navbar -->

                  </nav>

                  <div class="container-fluid">
                                @yield('content')

                </div>
                </div>

              </div>
              <!-- /#wrapper -->







<script  src="https://code.jquery.com/jquery-3.4.1.js"
integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
crossorigin="anonymous">
</script>


<!-- Menu Toggle Script -->

       <script>
            $("#menu-toggle").click(function(e) {
              e.preventDefault();
              $("#wrapper").toggleClass("toggled");
              $(".fa-arrow-left").toggle();

            });
        </script>
<script src="{{ asset('node_modules/tinymce/tinymce.js') }}"></script>
<script>
    tinymce.init({
        selector:'textarea.description',
        height:800

    });
</script>


</body>
</html>
