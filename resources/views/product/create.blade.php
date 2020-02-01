@extends('layouts.back')

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
    </div>
    <div class="col-lg-12">
        <cite>
            Insérer une Photo :
            <ul>
                <li>cliquer sur l'icone image</li>
                <li>Aller chercher l'image</li>
                <li>copier l'adresse de l'image qui apparait dans 'source' puis appuyer sur "annuler"</li>
                <li>coller l'adresse obtenue dans l'éditeur de texte</li>
            </ul>
        </cite>
            </div>
    <div class="col-md-4">
        <div class="form-group">
            <strong>photo1</strong>
            <textarea class="image" col="4" name="photo1" placeholder="Ecrire un article"></textarea>
            <span class="text-danger">{{ $errors->first('photo1') }}</span>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <strong>photo2</strong>
            <textarea class="image" col="4" name="photo2" placeholder="Ecrire un article"></textarea>
            <span class="text-danger">{{ $errors->first('photo2') }}</span>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <strong>photo3</strong>
            <textarea class="image" col="4" name="photo3" placeholder="Ecrire un article"></textarea>
            <span class="text-danger">{{ $errors->first('photo2') }}</span>
        </div>
    </div>

    <div class="col-md-12">
        <button type="submit" class="btn btn-primary">Valider</button>
    </div>
</div>

</form>

<a href="/products">Retour</a>


@endsection
