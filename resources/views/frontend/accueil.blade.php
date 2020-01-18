@extends('layouts.frontTemplate')

@section('content')

<style>
  .welcome{text-align: center;height: 89vh;background: url('../img/fullPage.jpg')no-repeat center fixed;}
  .titre{background:rgba(255,255,255,0.8);border:1px solid #20B2AA;border-radius: 555px 25px 15px 25px/25px 5px 35px 555px;margin:8rem 0;}
  .jumbotron h1 {color:#20B2AA;font-weight: 600;text-shadow:2px 2px 2px #000;font-size: 3.5rem;text-transform: capitalize;}
  .jumbotron .lead {color:#000;font-weight: 500;}
  @media(max-width:991px){
      .welcome{height:55vh;}
      .titre{margin:0;}
  }
  @media(max-width:650px){
      .welcome h1{font-size:2rem;}
      .titre{margin:0 0;}

  }
  @media(max-width:520px){
    .welcome{height:37vh;}

      blockquote{display: none;}
      .welcome p{display:none;}

  }
</style>

  <div class="jumbotron welcome " >
    <div class="row ">
      <div class="col-lg-8 titre mx-auto">
              <h1 class="">D'une terre à l'autre : Corresmonde</h1>

              <p class="lead">Un projet de correspondance entre des collégiens et des jeunes migrants </p>
              <hr class="my-4">



              <blockquote class="font-italic">"Voyageur, il n'y a pas de chemin, le chemin se fait en marchant ..."</blockquote>

              <p class="lead">
              <a class="btn btn-primary btn-lg" href="/projet" role="button">Le projet</a>
              </p>

      </div>
    </div>
  </div>

@endsection
