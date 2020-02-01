@extends('layouts.front')

@section('content')

<style>
    .welcome{text-align: center;background: transparent;background:rgba(255,255,255,0.8);border:1px solid #20B2AA;border-radius: 555px 25px 15px 25px/25px 5px 35px 555px;}
    .jumbotron h1 {color:#20B2AA;font-weight: 600;text-shadow:2px 2px 2px #000;font-size: 3.5rem;text-transform: capitalize;}
    .jumbotron .lead {color:#000;font-weight: 500;}
    .carousel-inner{height:350px;}

    @media(max-width:439px){
        .container h1{font-size:2.5rem;}
    }
    @media(max-width:316px){
        .container h1{font-size:2rem;}
    }
</style>

<div class="jumbotron jumbotron-fluid welcome">
    <div class="container">
      <h1 class="display-4 ">Déroulés</h1>
    </div>
</div>

<div class="row mx-5">
   <div class="container">

        @foreach($deroules as $deroule)
        <div class="row">
            <div class=" mx-auto ">
                <a class="rightMenuTitle " href="{{ route('deroule.edit',$deroule->id)}}">
                    <div class=" border-success bg-light derouleSection mx-2 my-3">
                    <p>
                        <h4 class="text-center">{{ $deroule->derouleTitle }}</h4>
                    <a href="{{ url('deroule') }}" data-toggle="lightbox"></a>
                    </p>
                    <p class="px-4 py-2">
                        {!!Str::limit(strip_tags ($deroule->derouleContent)) !!}
                    </p>
                    </div>
                </a>
            </div>

        </div>
        @endforeach
    </div>

</div>
<div id="carouselExampleControls" class="carousel slide my-5 border-success col-lg-8 mx-auto" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="img/atelier_dessin/6.jpeg" alt="#">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="img/atelier_dessin/7.jpeg" alt="#">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="img/atelier_dessin/3.jpeg" alt="#">
      </div>

    </div>
    <a class="carousel-control-prev bg-primary" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next bg-primary " href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
@endsection
