@extends('layouts.frontTemplate')

@section('content')
<style>
.welcome{text-align: center;background: transparent;background:rgba(255,255,255,0.8);border:1px solid #20B2AA;border-radius: 555px 25px 15px 25px/25px 5px 35px 555px;}
    .jumbotron h1 {color:#20B2AA;font-weight: 600;text-shadow:2px 2px 2px #000;font-size: 3.5rem;text-transform: capitalize;}
    .jumbotron .lead {color:#000;font-weight: 500;}
    .container{padding: 0;}
    .container p img{max-width:700px; width:100%;}
    .container p{text-align: center;}
@media(max-width:439px){
    .container h1{font-size:2.5rem;}
}
@media(max-width:316px){
    .container h1{font-size:2rem;}
}
</style>
<div class="jumbotron jumbotron-fluid welcome">
    <div class="container">
      <h1 class="display-4 ">Comprendre les migrations</h1>
    </div>
</div>

@foreach($understandings as $understanding)


  <div class="card">
    <a class="rightMenuTitle" href="{{ route('understanding.edit',$understanding->id)}}">

      <h2 class="text-center">{!! $understanding->understandingTitle  !!}</h2></a>
       {!! $understanding->understandingContent  !!}
  </div>
            @endforeach

@endsection
