@extends('layouts.frontTemplate')

@section('content')
<div class="row">
<div class="col-lg-9">
    <h1 class="text-success">{{ $product_info->title }}</h1>


    <div class="">
        <p>
            {{$product_info->description}}
         </p>
    </div>

</div>
<div class="col-lg-3">
    <h2 class="text-primary">travaux des élèves</h2>
    @foreach($products as $product)
    <div class="card">
        <a href="{{ route('ressources.edit',$product->id)}}">
            <p>article N° {{ $product->numArticle}}</p></a>

            <div>{{ $product->title }}</div>
            <div>{{ Str::limit($product->description) }}</div>
        {{  date('d/m/Y, à H', strtotime($product->created_at))  }} h {{date('i', strtotime($product->created_at))}}
    </div>

@endforeach
</div>

</div>



@endsection
