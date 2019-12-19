@extends('layouts.edit')

@section('content')

<link rel="stylesheet" href="">
<h2  class="SubTitle text-center">Ecrire un article</a></h2>
<a href="/products">Retour</a>

<br>

<form action="{{ route('products.store') }}" method="POST" name="add_product">
{{ csrf_field() }}

<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <strong>Titre</strong>
            <input type="text" name="title" class="form-control" placeholder="Titre de l'article">
            <span class="text-danger">{{ $errors->first('title') }}</span>
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <strong>N°</strong>
            <input class="form-control" style="width:60px;"type="number" min=0 name="numArticle" ></textarea>
            <span class="text-danger">{{ $errors->first('numArticle') }}</span>
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <strong>Contenu</strong>
            <textarea class="description" col="4" name="description" placeholder="Ecrire un article"></textarea>
            <span class="text-danger">{{ $errors->first('description') }}</span>
        </div>

    <div class="col-md-12">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>

</form>
<a href="/products">Retour</a>


@endsection
