@extends('layouts.test')

@section('content')

<style>

    .jumbotron-fluid{
        text-align:center; margin-bottom:2rem;
    }

    .retour{
    display: flex;
    margin:2rem 4rem;
    justify-content: flex-end;
    }

</style>

    <div class="jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Uploader une image</h1>
            <p class="lead">faire glisser une image ou cliquer dans le rectangle ci-dessous</p>
        </div>
    </div>
        <form action="{{ url('gallery')}} " class="dropzone">
        {{csrf_field ()}}
        </form>
    <div class="retour">

        <a class="btn btn-warning" href="{{ url('gallery')}} ">Retour</a>

    </div>
@endsection
