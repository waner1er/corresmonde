@extends('layouts.frontTemplate')

@section('content')
<style>
    body{background: url('../uploads/1/photos/deroule/expoapollineaicc88cha.jpg')no-repeat center;}
  .welcome{padding:0;text-align: center;height: 20vh;background:rgba(255,255,255,0.5);border:1px solid #20B2AA;border-radius: 555px 25px 15px 25px/25px 5px 35px 555px;}
  .jumbotron h1 {color:#20B2AA;font-weight: 600;text-shadow:2px 2px 2px #000;font-size: 3.5rem;text-transform: capitalize;}
  .jumbotron .lead {color:#000;font-weight: 500;}
  .derouleSection a{ margin: 0;}
  .row{justify-content: center}
  .derouleSection:hover{background:#53d8bb;}
  @media (max-width: 420px){
  .welcome h1 {color:#fff;font-weight: 600;text-shadow:2px 2px 2px #000;font-size: 2rem;text-transform: capitalize;}

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
