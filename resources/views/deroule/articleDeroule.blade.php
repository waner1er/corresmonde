@extends('layouts.frontArticleTemplate')

@section('content')
<link rel="stylesheet" href="../../css/sandstone.css">
<link rel="stylesheet" href="../../css/correstyle.css">

<style>

    .welcome{padding:0;text-align: center;height: 20vh;background:#20B2AA;border:1px solid #20B2AA;border-radius: 555px 25px 15px 25px/25px 5px 35px 555px;}
    .jumbotron h1 {color:white;font-weight: 600;text-shadow:2px 2px 2px #000;font-size: 3.5rem;text-transform: capitalize;}
    .jumbotron .lead {color:#000;font-weight: 500;}
    @media (max-width: 420px){
    .welcome h1 {color:#fff;font-weight: 600;text-shadow:2px 2px 2px #000;font-size: 2rem;text-transform: capitalize;}

  }
</style>


    <div class="jumbotron jumbotron-fluid welcome">
        <div class="container">
          <h1 class="display-4 ">{!! $deroule_info->derouleTitle!!}</h1>
        </div>
      </div>
<div class="card">
    {!! $deroule_info->derouleContent !!}


</div>

@endsection
