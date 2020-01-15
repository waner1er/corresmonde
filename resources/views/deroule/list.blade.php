@extends('layouts.app')

@section('content')
  <br>
   <div class="row">
        <div class="col-lg-8">
<style>
.derouleSection{height:350px;overflow: scroll;}
.derouleSection div p img{max-width: 700px; width:100%}

</style>
             @foreach($deroules as $deroule)
                <div class="card derouleSection">
                    <div class="card-header">
                        <a href="{{ route('deroules.edit',$deroule->id)}}"><h2>{{ $deroule->derouleTitle }}</h2></a> <br>

                    </div>
                    <div >
                        {!! $deroule->derouleContent  !!}
                    </div>
                </div>
                 <div class='card'><a href="{{ route('deroules.edit',$deroule->id)}}" class="btn btn-success col-lg-2 col-md-4 col-sm-4 col-xs-4">Modifier</a></div>

              @endforeach

       </div>
       <div class="col-lg-4">
        <a class="btn btn-success"href="{{ route('deroules.create') }}">Ecrire un nouveau déroulé</a>

       </div>
   </div>
 @endsection
