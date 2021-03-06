@extends('layouts.front')

@section('content')
<style>
.welcome{text-align: center;background: transparent;background:rgba(255,255,255,0.8);border:1px solid #20B2AA;border-radius: 555px 25px 15px 25px/25px 5px 35px 555px;}
    .jumbotron h1 {color:#20B2AA;font-weight: 600;text-shadow:2px 2px 2px #000;font-size: 3.5rem;text-transform: capitalize;}
    .jumbotron .lead {color:#000;font-weight: 500;}

    @media(max-width:439px){
    .container h1{font-size:2.5rem;}
    }
    @media(max-width:316px){
    .container h1{font-size:2rem;}
    }
</style>
@foreach($projects as $project)
<div class="jumbotron jumbotron-fluid welcome">
    <div class="container">
      <h1 class="">{{ $project->projectTitle }}</h1>
    </div>
  </div>

    <div class="container p-3 text-justify">
         {!! $project->projectContent  !!}
    </div>
              @endforeach

@endsection
