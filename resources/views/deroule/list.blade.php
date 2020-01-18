@extends('layouts.app')

@section('content')
<style>
    .derouleSection{height:350px;overflow: scroll;}
    .derouleSection div p img{max-width: 700px; width:100%}

    </style>

<a class="btn btn-success mx-auto my-3"href="{{ route('deroules.create') }}">+</a>
<div class="row">
        <div class="col-lg-12">

             @foreach($deroules as $deroule)
             <div class='card '>
                    <div class="card-header text-center">
                        <a href="{{ route('deroules.edit',$deroule->id)}}"><h2>{{ $deroule->derouleTitle }}</h2></a> <br>
                    </div>

                </div>
                <div class="text-center">
                    <a href="{{ route('deroules.edit',$deroule->id)}}" class="btn btn-primary mt-2 mb-5 col-lg-2 col-md-4 col-sm-4 col-xs-4">Modifier</a>
                </div>

              @endforeach

       </div>
       <div class="col-lg-4 text-center">

       </div>
   </div>
 @endsection
