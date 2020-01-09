@extends('layouts.frontTemplate')

@section('content')
<link rel="stylesheet" href="../../css/sandstone.css">
<link rel="stylesheet" href="../../css/correstyle.css">
   
<style>
    .rightMenuTitle{
        text-transform: uppercase;
    }
    .title{
        text-align: center;
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
