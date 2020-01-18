@extends('layouts.frontTemplate')

@section('content')


<style>
.welcome{text-align: center;background: transparent;background:rgba(255,255,255,0.8);border:1px solid #20B2AA;border-radius: 555px 25px 15px 25px/25px 5px 35px 555px;}
    .jumbotron h1 {color:#20B2AA;font-weight: 600;text-shadow:2px 2px 2px #000;font-size: 3.5rem;text-transform: capitalize;}
    .jumbotron .lead {color:#000;font-weight: 500;}
    .rencontreContent{height:300px; overflow: hidden;}
    #map{height:500px;}
    .rencontreContent:hover{background:(0,0,0,0.5);}
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
              <h1 class="display-4 ">Portfolio des rencontres</h1>
            </div>
        </div>

        {{-- @foreach($rencontres as $rencontre)
        <div class="text-center">
            <a class="btn btn-success mb-3" href="{{ route('rencontre.edit',$rencontre->id)}}">
                {{ $rencontre->rencontreTitle }}
            </a>
        </div>
        @endforeach --}}

        @foreach($rencontres as $rencontre)

        <div class="container card rencontreContent my-5">
            <a class="rightMenuTitle" href="{{ route('rencontre.edit',$rencontre->id)}}">
                <div>{{ $rencontre->rencontreTitle }}</div>
                {{  date('d/m/Y, à H', strtotime($rencontre->created_at))  }} h {{date('i', strtotime($rencontre->created_at))}}

            <div>{!! $rencontre->rencontreContent !!}</div>
            </a>

        </div>
    @endforeach
    </div>
</div>



@endsection
