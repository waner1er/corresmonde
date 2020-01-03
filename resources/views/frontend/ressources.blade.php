@extends('layouts.frontTemplate')

@section('content')

<h1>Parcours </h1>
<div class="row">
    <div id="map"class="col-lg-8">
        
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
