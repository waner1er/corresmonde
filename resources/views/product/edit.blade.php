@extends('layouts.appArticle')

@section('content')
<link rel="stylesheet" href="../../css/sandstone.css">
<link rel="stylesheet" href="../../css/adminCss.css">

<h2  class="text-center Subtitle">Modifier <br><em class="text-primary">{{ $product_info->title }}</em></a></h2>
<a href="/products">Retour</a>


<form style="width:100%"action="{{ route('products.update', $product_info->id) }}" method="POST" name="update_product">
{{ csrf_field() }}
@method('PATCH')

<div class="row">
    <div class="col-lg-12">
        <div class="form-group">
            <strong>Titre</strong>
            <input type="text" name="title" class="form-control" value="{{ $product_info->title }}">
            <span class="text-danger">{{ $errors->first('title') }}</span>
        </div>
    </div>

    <div class="col-lg-12">
        <div class="form-group">
            <strong>Numéro d'Article</strong>
            <input style="width:60px;"type="number" max="500" min="0" class="form-control" name="numArticle" value="{{ $product_info->numArticle }}">
            <span class="text-danger">{{ $errors->first('numArticle') }}</span>
        </div>
    </div>

    <div class="col-lg-12">
        <div class="form-group">
            <strong>Contenu</strong>
            <textarea style="height:550px;"id="my_toolbar"class="form-control description" col="4" name="description" placeholder="Enter Description" >{{ $product_info->description }}</textarea>
            <span class="text-danger">{{ $errors->first('description') }}</span>
        </div>
    </div>

    <div class="col-lg-12">
        <button type="submit" class="btn btn-primary">Valider</button>
    </div>
</div>

</form>


@endsection
