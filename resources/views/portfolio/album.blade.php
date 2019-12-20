@extends('layouts.app')

@section('content')
<div class="jumbotron-fluid"style="text-align:center;">
    <div class="container">
        <h1 class="display-4">Portfolio</h1>
        <p class="lead">Liste de toutes les photos</p>
      </div>
</div>
<div class="button" style="margin:25px 0">
<a class="btn btn-info" href="{{ url('/portfolio')}} ">Ajouter des photos</a>
</div>


    <div class="row"style="justify-content:space-evenly">
        @foreach ($galleries as $gallery)
            <div class="">
               <a href="{{ $gallery->file}}"data-toggle="lightbox"> <img width="300" height="200"src="{{$gallery->file}}"></a>
               <form action="{{ route('gallery.destroy', $gallery->id)}}" method="post">
                {{ csrf_field() }}
                @method('DELETE')
                <button class="btn btn-danger" type="submit">Supprimer</button>
              </form>
            </div>

        @endforeach
    </div>

@endsection
