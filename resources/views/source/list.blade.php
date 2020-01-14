@extends('layouts.app')

@section('content')
  <br>
   <div class="row">
        <div class="col-lg-8">
<style>.sourceSection{height:350px;overflow: scroll;}</style>
             @foreach($sources as $source)
                <div class="card sourceSection">
                    <div class="card-header">
                        <a href="{{ route('sources.edit',$source->id)}}"><h2>{{ $source->sourceTitle }}</h2></a> <br>

                    </div>
                    <div >
                        {!! $source->sourceContent  !!}
                    </div>
                </div>
                 <div class='card'><a href="{{ route('sources.edit',$source->id)}}" class="btn btn-success col-lg-2 col-md-4 col-sm-4 col-xs-4">Modifier</a></div>

              @endforeach

       </div>
       <div class="col-lg-4">
        <a class="btn btn-success"href="{{ route('sources.create') }}">Ecrire un nouveau déroulé</a>

       </div>
   </div>
 @endsection
