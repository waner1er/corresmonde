@extends('layouts.app')

@section('content')
<h2 style="margin-top: 12px;" class="text-center">Edit Product</a></h2>
<br>

<form style="width:100%"action="{{ route('products.update', $product_info->id) }}" method="POST" name="update_product">
{{ csrf_field() }}
@method('PATCH')

<div class="row">
    <div class="col-lg-12">
        <div class="form-group">
            <strong>Titre</strong>
            <input type="text" name="title" class="form-control" placeholder="Titrevalue="{{ $product_info->title }}">"
            <span class="text-danger">{{ $errors->first('title') }}</span>
        </div>
    </div>

    <div class="col-lg-12">
        <div class="form-group">
            <strong>Numéro d'Article</strong>
            <input style="width:60px;"type="number" max="500" min="0" class="form-control" name="numArticle" placeholder="0">
            <span class="text-danger">{{ $errors->first('numArticle') }}</span>
        </div>
    </div>

    <div class="col-lg-12">
        <div class="form-group">
            <strong>Contenu</strong>
            <textarea class="form-control" style='height:350px'col="4" name="description" placeholder="Enter Description" >{{ $product_info->description }}</textarea>
            <span class="text-danger">{{ $errors->first('description') }}</span>
        </div>
    </div>

    <div class="col-lg-12">
        <button type="submit" class="btn btn-primary">Valider</button>
    </div>
</div>

</form>
@endsection
