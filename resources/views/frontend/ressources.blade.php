@extends('layouts.frontTemplate')

@section('content')

<h1>Travaux des élèves </h1>
<div class="row">
    <div class="col-lg-8">
        <h3>Un petit texte qui explique la démarche en 3 mots comment s'organise le travail des élèves </h3>
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
