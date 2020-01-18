@extends('layouts.frontTemplate')

@section('content')


<style>
.welcome{text-align: center;background: transparent;background:rgba(255,255,255,0.8);border:1px solid #20B2AA;border-radius: 555px 25px 15px 25px/25px 5px 35px 555px;}
    .jumbotron h1 {color:#20B2AA;font-weight: 600;text-shadow:2px 2px 2px #000;font-size: 3.5rem;text-transform: capitalize;}
    .jumbotron .lead {color:#000;font-weight: 500;}
    .sourceTitre{
    color: #20B2AA;
    font-weight: 600;
    text-shadow: 2px 2px 2px #000;
    font-size: 2rem;
    text-transform: uppercase;
    }
    .sourceContent{height:350px;overflow: hidden;box-shadow: 5px 5px 2px #c3c3c3c3;}
    .cadreSource{background:#f7f4f4;}
    @media(max-width:439px){
    .container h1{font-size:2.5rem;}
    }
    .sourceTitre{font-size:1.5rem;}
@media(max-width:316px){
    .sourceTitre{font-size:1rem;}

    .container h1{font-size:2rem;}
}
</style>

<div class="row">

    <div class="col-lg-12">
        <div class="jumbotron jumbotron-fluid welcome">
            <div class="container">
              <h1 class="display-4">Sources des travaux d'élèves</h1>
            </div>
        </div>
        @foreach($sources as $source)
        <div class="card pb-4 cadreSource">
        <a class="rightMenuTitle text-center text-uppercase" href="{{ route('source.edit',$source->id)}}">
            <h1 class="sourceTitre pt-3">{{ $source->sourceTitle }}</h1>
            <p class="text-center">{{  date('d/m/Y', strtotime($source->created_at))  }}
            </p>
        </a>
        <div class="container card sourceContent my-3 p-5">

            {{-- <div>{!! Str::limit(strip_tags($source->sourceContent))!!}</div> --}}
            <div>{!! ($source->sourceContent)!!}</div>
        </div>
    </div>
        <hr class="my-5">

    @endforeach
    </div>
</div>



@endsection
