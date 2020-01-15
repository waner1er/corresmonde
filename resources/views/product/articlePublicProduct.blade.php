@extends('layouts.frontArticleTemplate')

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
    .container{padding: 0;}
    .container p img{max-width:700px; width:100%;}
    .container p{text-align: center;}
@media(max-width:439px){
    .container h1{font-size:2.5rem;}
}
@media(max-width:316px){
    .container h1{font-size:1.5rem;}
}
</style>

<div class="row">
    <div class="col-lg-8">
        <h1 class="text-success title">{{ $product_info->title }}</h1>


        <div class="">
            <p>
                {!! $product_info->description !!}
            </p>
        </div>

    </div>

    <div class="col-lg-4">
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
</div>



@endsection
