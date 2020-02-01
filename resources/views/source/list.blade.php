@extends('layouts.back')

@section('content')
<style>
.sourceSection{height:350px;}
.contentSource{overflow: scroll;}
.sourceSection div p img{
    width: 80%;
    max-width: 600px;
}
</style>

<h2 class="mt-5 mb-2 text-center text-success">Source des travaux d'élèves</h2>
<div class="row">
        <div class="col-lg-12">
<a class="btn btn-success my-3"href="{{ route('sources.create') }}">+</a>

             @foreach($sources as $source)
                <div class="card sourceSection mt-3 mb-2">
                    <div class="card-header ">
                        <a href="{{ route('sources.edit',$source->id)}}"><h2>{{ $source->sourceTitle }}</h2></a> <br>

                    </div>
                    <div class="contentSource" >
                        {!! $source->sourceContent  !!}
                    </div>
                </div>
                <div class="text-center">
                 <a href="{{ route('sources.edit',$source->id)}}" class="btn btn-primary  col-lg-2 col-md-4 col-sm-4 col-xs-4 mb-5">Modifier</a>
                </div>
              @endforeach
              {!! $sources->links() !!}


   </div>
 @endsection
