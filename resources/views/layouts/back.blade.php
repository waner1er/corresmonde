<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="img/LOGO.png" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.css">
    <link rel="stylesheet" href={{ URL::asset('node_modules/bootstrap/dist/css/bootstrap.css') }}>
    <link rel="stylesheet" href="{{ URL::asset ('css/adminCss.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css">
    <script src="https://kit.fontawesome.com/0cede21d6d.js" crossorigin="anonymous"></script>

    <title>D'une terre à l'autre Corresmonde - Admin </title>

</head>

<body>

    @guest
    <section class="d-flex mb-5" id="wrapper">

    <!-- Sidebar -->
    <section class="bg-light border-right" id="sidebar-wrapper">
        <a href="/admin"class="sidebar-heading text-success btn">Tableau de bord</a>

        <div class="sidebar-heading text-success"><strong><u>Espace élèves</u></strong>
            <div class="sidebar-heading text-success">
                <a href="{{ url ('products') }} " class="list-group-item list-group-item-action bg-light">Parcours</a>
            </div>
        </div>


    </section>
    @else

    <section class="d-flex" id="wrapper">

        <!-- Sidebar -->
        <div class="bg-light border-right" id="sidebar-wrapper">
            <a href="{{ url ('admin') }}"class="sidebar-heading text-success btn">Tableau de bord</a>

            <div class="sidebar-heading text-success">Objectifs
                <a href="{{ url ('projects') }}" class="list-group-item list-group-item-action bg-light">Objectifs du projet</a>
                <a href="{{ url ('deroules') }} " class="list-group-item list-group-item-action bg-light">Déroulé du projet</a>
            </div>

            <div class="sidebar-heading text-success">
                <a href="{{ url ('understandings') }}" class="list-group-item list-group-item-action bg-light">Comprendre les migrations</a>
            </div>

            <div class="sidebar-heading text-success"><strong><u>Travaux des élèves</u></strong>
                <div class="sidebar-heading text-success">Collégiens
                    <a href="{{ url ('sources') }} " class="list-group-item list-group-item-action bg-light">Sources des travaux d'élèves</a>
                    <a href="{{ url ('products') }}" class="list-group-item list-group-item-action bg-light">Parcours</a>
                </div>
                <div class="sidebar-heading text-success">MAST
                    <a href="{{ url('periples') }}" class="list-group-item list-group-item-action bg-light">Périples</a>
                </div>
            </div>

            <div class="sidebar-heading text-success">
                <a href="{{ url('rencontres')}}" class="list-group-item list-group-item-action bg-light">Portfolio</a>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->
    @endguest

        <!-- Page Content -->
        <div id="page-content-wrapper">

            <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                <button class="btn btn-info" id="menu-toggle"><i class="fas fa-arrow-left"></i>  Barre de menu</button>

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
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Espace admin') }}</a>
                            </li>
                            {{-- @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif --}}
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>

                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                        {{ __('Se déconnecter') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>

            </nav>

{{----------------------------------- CONTENT ---------------------------------------------}}

            <div class="container-fluid">
                        @yield('content')

            </div>
{{----------------------------------------------------------------------------------------}}

        </div>

    </section>


{{-- jquery --}}
<script  src="https://code.jquery.com/jquery-3.4.1.js"
integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
crossorigin="anonymous">
</script>

<script src="{{ URL::asset('node_modules/tinymce/tinymce.min.js') }}"></script>
<script src="{{ URL::asset('js/tinymce_init.js') }}"></script>
<script src="{{ URL::asset('js/tinymce_init2.js') }}"></script>

{{-- bootstrap --}}
<script src= {{ URL::asset('node_modules/bootstrap/dist/js/bootstrap.min.js') }}>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

<script>
    jQuery(document).ready(function()
    {
        $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
        $(".fa-arrow-left").toggle();
        });
    });
</script>


</body>
</html>
