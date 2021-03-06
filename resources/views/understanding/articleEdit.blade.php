@extends('layouts.front')

@section('content')


<style>
  .welcome{text-align: center;background: transparent;background:rgba(255,255,255,0.8);border:1px solid #20B2AA;border-radius: 555px 25px 15px 25px/25px 5px 35px 555px;}
    .jumbotron h1 {color:#20B2AA;font-weight: 600;text-shadow:2px 2px 2px #000;font-size: 3.5rem;text-transform: capitalize;}
    .jumbotron .lead {color:#000;font-weight: 500;}
    .card img{
    width:80%;
    max-width: 600px;;
}
@media(max-width:439px){
    .container h1{font-size:2.5rem;}
}
@media(max-width:316px){
    .container h1{font-size:1.5rem;}
}
</style>

<div class="row">

    <div class="col-lg-12">
        <div class="jumbotron jumbotron-fluid welcome">
            <div class="container">
              <h1 class="display-4 ">{{ $understanding_info->understandingTitle }}</h1>
            </div>
        </div>

        <div class="container border">
            <p>
                {!! $understanding_info->understandingContent !!}
            </p>
        </div>

    </div>

    {{-- <div class="col-lg-4 mt-5">
        @foreach($understandings as $understanding)
        <div class="card ">
            <a class="rightMenuTitle" href="{{ route('understanding.edit',$understanding->id)}}">
                <div>{{ $understanding->understandingTitle }}</div>
                {{  date('d/m/Y', strtotime($understanding->created_at))  }}
            </a>
            <div>{!! Str::limit(strip_tags($understanding->understandingContent))!!}</div>

        </div>
    @endforeach
    </div> --}}
</div>



@endsection
