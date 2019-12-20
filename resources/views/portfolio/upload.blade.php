@extends('layouts.edit')

@section('content')
<div class="jumbotron-fluid"style="text-align:center;">
    <div class="container">
        <h1 class="display-4">Uploader une image</h1>
        <p class="lead">faire glisser une image ou cliquer dans le rectangle ci-dessous</p>
      </div>
</div>
<a class="btn btn-warning" href="{{ url('gallery')}} ">Retour</a>
<form action="{{ url('gallery')}} " class="dropzone">
    {{csrf_field ()}}
    </form>

    <div>

    </div>
@endsection
