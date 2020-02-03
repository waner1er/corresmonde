@extends('layouts.front')

@section('content')


<style>
    .rightMenuTitle{
        text-transform: uppercase;
    }
    .title{
        text-align: center;
    }
    .welcome{text-align: center;background: transparent;background:rgba(255,255,255,0.8);border:1px solid #20B2AA;border-radius: 555px 25px 15px 25px/25px 5px 35px 555px;}
    .jumbotron h1 {color:#20B2AA;font-weight: 600;text-shadow:2px 2px 2px #000;font-size: 3.5rem;text-transform: capitalize;}
    .jumbotron .lead {color:#000;font-weight: 500;}

    #map{height:500px;}
    @media(max-width:439px){
    .container h1{font-size:2.5rem;}
}
@media(max-width:316px){

    .container h1{font-size:2rem;}
}
</style>

<div class="row">


    <div class="col-lg-12">
        <div class="jumbotron jumbotron-fluid welcome">
            <div class="container">
              <h1 class="display-4 ">Périples</h1>
            </div>
        </div>
        @foreach($periples as $periple)
        <div class="container border ">
            <a class="rightMenuTitle" href="{{ route('periple.edit',$periple->id)}}">
                {{-- <div>{{ $periple->peripleTitle }}</div> --}}
            </a>
            <div>{!! $periple->peripleContent !!}</div>
            {{-- {{  date('d/m/Y, à H', strtotime($periple->created_at))  }} h {{date('i', strtotime($periple->created_at))}} --}}

        </div>
    @endforeach
    </div>
</div>
<div>Pages suivantes : </div>
{!! $periples->links() !!}


@endsection
