@extends('layouts.frontTemplate')

@section('content')
<style>
  .welcome{text-align: center;background: transparent;background:rgba(255,255,255,0.8);border:1px solid #20B2AA;border-radius: 555px 25px 15px 25px/25px 5px 35px 555px;}
    .jumbotron h1 {color:#20B2AA;font-weight: 600;text-shadow:2px 2px 2px #000;font-size: 3.5rem;text-transform: capitalize;}
    .jumbotron .lead {color:#000;font-weight: 500;}
    .container{padding: 0;}
    .container p img{max-width:700px; width:100%;}
    .container p{text-align: center;}
    #map{height:500px;}
    @media(max-width:439px){
    .container h1{font-size:2.5rem;}
}
@media(max-width:316px){
    .container h1{font-size:2rem;}
}
</style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.1/css/lightbox.css">
<h1>Parcours </h1>
<div class="row ">


    <div class="col-lg-6 overflow-auto">
        <div class="jumbotron jumbotron-fluid welcome">
            <div class="container">
              <h1 class="">Parcours</h1>
            </div>
          </div>
        @foreach($products as $product)

        <div class="card ">
            <a class="rightMenuTitle" href="{{ route('ressources.edit',$product->id)}}">
                <div>{{ $product->title }}</div>
            </a>
        <div style="font-size:0.7em;"class="lead">{{  date('d/m/Y, à H', strtotime($product->created_at))  }} h {{date('i', strtotime($product->created_at))}}
        </div>
        <div>{!! Str::limit(strip_tags($product->description))!!}</div>
        </div>
        @endforeach
    </div>
    <div class="col-lg-6">
        <div class="jumbotron jumbotron-fluid welcome">
            <div class="container">
              <h1 class="">Cartographie des parcours</h1>
            </div>
        </div>

        <div class=" border ">
            <div id="map"></div>
        </div>
    </div>

</div>
<div class="row my-5 border">
    <div class="jumbotron jumbotron-fluid welcome col-lg-12">
        <div class="container">
          <h1 class="">Informations principales des pays du monde</h1>
        </div>
    </div>
    <div class="col-lg-4 p-4">
        <div id="main-container">
          <div class="text-center" id="flag-container">
            <img width="300px"src="" alt="">
          </div>
        </div>
    </div>

    <div class="col-lg-8 text-center p-2">

        <table class="table table-striped">

            <tbody>
                <tbody>
                    <select id="countries" class="custom-select"></select>

                    <tr>
                      <th scope="row">Capitale</th>
                      <td id="capital"></td></td>

                    </tr>
                    <tr>
                      <th scope="row">Population</th>
                      <td id="population"></td>

                    </tr>
                    <tr>
                      <th scope="row">Region</th>
                      <td id="region"></td>
                    </tr>
                    <tr>
                      <th scope="row">Langues</th>
                      <td id="languages">Larry</td>
                    </tr>

            </tbody>
          </table>
    </div>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.1/js/lightbox.js"></script>

@endsection
