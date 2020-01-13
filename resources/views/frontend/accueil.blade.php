@extends('layouts.frontTemplate')

@section('content')

<style>
  .welcome{text-align: center;height: 89vh;background: url('../img/fullPage.jpg')no-repeat center fixed;}
  .titre{background:rgba(255,255,255,0.8);border:1px solid #20B2AA;border-radius: 555px 25px 15px 25px/25px 5px 35px 555px;margin:12rem 0;}
  .jumbotron h1 {color:#20B2AA;font-weight: 600;text-shadow:2px 2px 2px #000;font-size: 3.5rem;text-transform: capitalize;}
  .jumbotron .lead {color:#000;font-weight: 500;}
</style>

  <div class="jumbotron welcome" >
    <div class="row ">
      <div class="col-2"></div>
      <div class="col-8 titre">
              <h1 class="">D'une terre à l'autre : Corresmonde</h1>

              <p class="lead">Un projet de correspondance entre des collégiens et des jeunes migrants </p>
              <hr class="my-4">



              <blockquote class="font-italic">"La vie ou la mort pour trouver du bonheur"</blockquote>

              <p class="lead">
              <a class="btn btn-primary btn-lg" href="/projet" role="button">Le projet</a>
              </p>

      </div>
      <div class="col-2"></div>
    </div>
  </div>

@endsection
