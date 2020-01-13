<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Bootstrap theme Css --}}
    <link rel="stylesheet" href="../../css/bootstrap.css">

    {{-- Admin specific CSS --}}
    <link rel="stylesheet" href="../../css/adminCss.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css">
    <script src="https://kit.fontawesome.com/0cede21d6d.js" crossorigin="anonymous"></script>

    <title>D'une terre à l'autre Corresmonde - Admin </title>

</head>

<body>

    <div class="d-flex" id="wrapper">

            <!-- Sidebar -->
            <div class="bg-light border-right" id="sidebar-wrapper">
                <a href="/admin"class="sidebar-heading text-success btn">Tableau de bord</a>
                <div class="sidebar-heading text-success">Objectifs
                <a href="/projects" class="list-group-item list-group-item-action bg-light">Objectifs du projet</a>
                <a href="/deroules" class="list-group-item list-group-item-action bg-light">Déroulé du projet</a>
            </div>
            <div class="sidebar-heading text-success">
                <a href="/understandings" class="list-group-item list-group-item-action bg-light">Comprendre les migrations</a>
            </div>
                <div class="sidebar-heading text-success">Productions
                <div class="sidebar-heading text-success">Collégiens
                    <a href="/products" class="list-group-item list-group-item-action bg-light">Parcours</a>
                <a href="#" class="list-group-item list-group-item-action bg-light">Anthologies</a>
                </div>
                <div class="sidebar-heading text-success">MAST
                    <a href="/periples" class="list-group-item list-group-item-action bg-light">Exposition</a>
                </div>
                </div>

            </div>
            <!-- /#sidebar-wrapper -->

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
                        <a class="nav-link text-warning" href="/">Retour au site <span class="sr-only">(current)</span></a>
                    </li>

                    <ul class="navbar-nav">
                        <!-- Authentication -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link text-success" href="{{ route('login') }}">{{ __('Admin') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    {{-- <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a> --}}
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
                                        {{ __('Se déconnecter') }}
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


{{-- JQUERY --}}
<script  src="https://code.jquery.com/jquery-3.4.1.js"
integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
crossorigin="anonymous">
</script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
crossorigin="anonymous">
</script>
<script src="bootstrap/js/bootstrap.js"></script>

{{-- Toggle --}}

<script>
    jQuery(document).ready(function()
    {

        $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
        $(".fa-arrow-left").toggle();
        });

        $(document).on('click', '[data-toggle="lightbox"]', function(event) {
            event.preventDefault();
            $(this).ekkoLightbox({
                alwaysShowClose: true,
            });
        });

    });
</script>



{{-- Tiny MCE --}}
{{-- <script src="{{ asset('node_modules/tinymce5/js/tinymce/tinymce.min.js') }}"></script> --}}
<script src="{{ asset('node_modules/tinymce/tinymce.min.js') }}"></script>
{{-- <script src="https://cdn.jsdelivr.net/gh/superpowr/powr_for_tinymce5/powr_plugin.js"></script> --}}

  <script>
    var editor_config = {
        language:"fr_FR",
        path_absolute : "/",
        selector: "textarea",
        fixed_toolbar_container:".description",
        plugins: [
          " advlist autolink lists link image imagetools charmap print preview hr anchor pagebreak",
          "searchreplace wordcount visualblocks visualchars code fullscreen ",
          "insertdatetime media nonbreaking save table contextmenu directionality",
          "emoticons template paste textcolor colorpicker textpattern visualblocks"
        ],

        toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
        extended_valid_elements: "script[src|async], img[class=myclass|!src|border:0|alt|title|width|height|style]// Allow POWr.js script to function",

        relative_urls: false,
        file_browser_callback : function(field_name, url, type, win) {
      var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
      var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

      var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
      if (type == 'image') {
        cmsURL = cmsURL + "&type=Images";
      } else {
        cmsURL = cmsURL + "&type=Files";
      }

      tinyMCE.activeEditor.windowManager.open({
        file : cmsURL,
        title : 'Filemanager',
        width : x * 0.8,
        height : y * 0.8,
        resizable : "yes",
        close_previous : "no"
      });
    }

    //     file_picker_callback: function (callback, value, meta) {
    //     let x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
    //     let y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

    //     let type = 'image' === meta.filetype ? 'Images' : 'Files',
    //         url  = editor_config.path_absolute + 'laravel-filemanager?editor=tinymce5&type=' + type;

    //     tinymce.activeEditor.windowManager.openUrl({
    //         url : url,
    //         title : 'Filemanager',
    //         width : x * 0.8,
    //         height : y * 0.8,
    //         onMessage: (api, message) => {
    //             callback(message.content);
    //         }
    //     });
    // },
    };

      tinymce.init(editor_config);
    </script>

</body>
</html>
