@extends('layouts.frontTemplate')

@section('content')
<style>
.info-container select,.info-container p{
    width:100%;
}
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.1/css/lightbox.css"><style>
#map{height:500px;}
</style>
<h1>Parcours </h1>
<div class="row ">


    <div class="col-lg-6 overflow-auto">
        <h2 class="text-primary rightMenuTitle">travaux des élèves</h2>
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
    <div class="col-lg-6 border">
        <div id="map">
    </div>
    </div>
</div>
<div class="row my-5 border">
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
