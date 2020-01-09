@extends('layouts.frontTemplate')

@section('content')

<style>

    .welcome{padding:0;text-align: center;height: 20vh;background:#20B2AA;border:1px solid #20B2AA;border-radius: 555px 25px 15px 25px/25px 5px 35px 555px;}
    .jumbotron h1 {color:white;font-weight: 600;text-shadow:2px 2px 2px #000;font-size: 3.5rem;text-transform: capitalize;}
    .jumbotron .lead {color:#000;font-weight: 500;}
    .trvx{margin:2rem 0;}
    </style>

<div class="jumbotron jumbotron-fluid welcome">
    <div class="container">
      <h1 class="display-4 ">Parcours</h1>
    </div>
  </div>
<div class="row">
    <div class="col-lg-12 trvx">
        <h2 class="text-primary rightMenuTitle">travaux des élèves</h2>
        @foreach($products as $product)
        <div class="card ">
        <a class="rightMenuTitle" href="{{ route('ressources.edit',$product->id)}}">
        <div>{{ $product->title }}</div>
        </a>
        <div>{!! Str::limit(strip_tags($product->description))!!}</div>
        {{  date('d/m/Y, à H', strtotime($product->created_at))  }} h {{date('i', strtotime($product->created_at))}}
        </div>
        @endforeach
    </div>

    <div id="map"class="col-lg-8">

    </div>
    <div class="col-lg-4">
        <h1 class="text-center">Informations principales sur les pays du monde</h1>
        <div id="main-container">
          <div class="text-center" id="flag-container">
            <img width="100px"src="" alt="">
          </div>
          <br>
          <div id="info-container">
            <select id="countries"></select>
            <p>Capitale: <span id="capital"></span></p>
            <p>Population: <span id="population"></span></p>
            <p>Region: <span id="region"></span></p>
            <p>Langues: <span id="languages"></span></p>

          </div>
        </div>
    </div>



</div>


@endsection
