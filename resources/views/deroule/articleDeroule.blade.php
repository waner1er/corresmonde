@extends('layouts.frontArticleTemplate')

@section('content')
<link rel="stylesheet" href="../../css/sandstone.css">
<link rel="stylesheet" href="../../css/correstyle.css">

<style>

    .welcome{padding:0;text-align: center;height: 20vh;background:#20B2AA;border:3px solid #20B2AA;border-radius: 555px 25px 15px 25px/25px 5px 35px 555px;}
    .jumbotron h1 {color:white;font-weight: 600;text-shadow:2px 2px 2px #000;font-size: 3.5rem;text-transform: capitalize;}
    .jumbotron .lead {color:#000;font-weight: 500;}
    @media (max-width: 420px){
    .welcome h1 {color:#fff;font-weight: 600;text-shadow:2px 2px 2px #000;font-size: 2rem;text-transform: capitalize;}
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
            <div class="card col-lg-10">

                {!! $deroule_info->derouleContent !!}
            </div>
            <div class="col-lg-2 text-center mt-5">


            </div>
        </div>
    </div>


@endsection
