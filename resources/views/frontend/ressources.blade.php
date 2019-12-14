@extends('layouts.frontTemplate')

@section('content')

<h1>Parcours</h1>
<div class="row">
    <div class="col-lg-8">
        <h1>présentation du travail des élèves</h1>
    </div>

    <div class="col-lg-4">
        <h2 class="text-primary">travaux des élèves</h2>
        @foreach($products as $product)
    <a href="{{ route('ressources.edit',$product->id)}}">
        <div class="card">
            <p>article N° {{ $product->numArticle}}</p>

                <div>{{ $product->title }}</div>
            <div>{{Str::limit($product->description)}}</div>
            {{  date('d/m/Y, à H', strtotime($product->created_at))  }} h {{date('i', strtotime($product->created_at))}}
        </div>
    </a>
    @endforeach
    </div>

</div>


@endsection
