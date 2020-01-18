@extends('layouts.frontArticleTemplate')

@section('content')
<link rel="stylesheet" href="../../css/sandstone.css">
<link rel="stylesheet" href="../../css/correstyle.css">

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
}
</style>


    <div class="jumbotron jumbotron-fluid welcome">
        <div class="container">
        <h1 class="display-4 ">{!! $deroule_info->derouleTitle!!}</h1>
        </div>
    </div>

  <div class="text-center">
    @foreach($deroules as $deroule)
    <a class="btn btn-success mb-3" href="{{ route('deroule.edit',$deroule->id)}}">
        {{ $deroule->derouleTitle }}
    </a>
@endforeach
  </div>

    <div class="row">
        <div class="container">
            <div class="card col-lg-12">

                {!! $deroule_info->derouleContent !!}
            </div>
            <div class="col-lg-2 text-center mt-5">


            </div>
        </div>
    </div>


@endsection
