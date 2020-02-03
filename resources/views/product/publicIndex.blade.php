@extends('layouts.front')

@section('content')
<style>
  .welcome{text-align: center;background: transparent;background:rgba(255,255,255,0.8);border:1px solid #20B2AA;border-radius: 555px 25px 15px 25px/25px 5px 35px 555px;}
    .jumbotron h1 {color:#20B2AA;font-weight: 600;text-shadow:2px 2px 2px #000;font-size: 3.5rem;text-transform: capitalize;}
    .jumbotron .lead {color:#000;font-weight: 500;}

    #map{height:500px;}
    @media(min-width:992px){
        /* .parcours{height: 837px;overflow: scroll;} */
    }
    @media(max-width:439px){
    .container h1{font-size:2.5rem;}
}
@media(max-width:316px){

    .container h1{font-size:2rem;}
}

</style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.1/css/lightbox.css">


    <div class="col-lg-12 parcours">
        <div class="jumbotron jumbotron-fluid welcome">
            <div class="container">
              <h1 class="">Parcours</h1>
            </div>
          </div>
    </div>

    @foreach($products as $product)
    <div class="row  border mx-2 my-5 bg-light">

        <div class="col-lg-8 my-4 ">
                <a class="rightMenuTitle" href="{{ route('ressources.edit',$product->id)}}">
                    <h3>{{ $product->title }}</h3>
                </a>
                <div style="font-size:0.7em;"class="lead">{{  date('d/m/Y', strtotime($product->created_at))  }}
                </div>
                <div class="col-lg-12">{!! Str::limit(strip_tags($product->description))!!}</div>

        </div>
        <div class="col-lg-3 my-4">
            <div class="col-lg-12 text-center">
                {{-- <div class="text-center"><img width="150"src="{{ $product->photo1 }}" alt="image"> --}}
                <div class="text-center"><img width="150"src="{{ $product->photo1}}" alt="image">
                    {{ $product->illustrations }}
            </div>
        </div>
    </div>
        </div>


        @endforeach

        {!! $products->links() !!}

<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.1/js/lightbox.js"></script>

@endsection
