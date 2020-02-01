@extends('layouts.back')

@section('content')
<link rel="stylesheet" href="../../css/sandstone.css">
<link rel="stylesheet" href="../../css/adminCss.css">

<h2  class="text-center Subtitle">Modifier <br><em class="text-primary">{{ $product_info->title }}</em></a></h2>
<a href="/products">Retour</a>


<form style="width:100%"action="{{ route('products.update', $product_info->id) }}" method="POST" name="update_product">
{{ csrf_field() }}
@method('PATCH')

<div class="row">
    <div class="col-lg-2 ">
        <div class="form-group">
            <strong>Numéro d'Article</strong>
            <input type="number" max="500" min="0" class="form-control text-center " name="numArticle" value="{{ $product_info->numArticle }}">
            <span class="text-danger">{{ $errors->first('numArticle') }}</span>
        </div>
    </div>
    <div class="col-lg-10">
        <div class="form-group">
            <strong>Titre</strong>
            <input type="text" name="title" class="form-control" value="{{ $product_info->title }}">
            <span class="text-danger">{{ $errors->first('title') }}</span>
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
            <textarea class="image" col="4" name="photo1" placeholder="Ecrire un article">{!! $product_info->illustrations !!}
            </textarea>
            <span class="text-danger">{{ $errors->first('photo1') }}</span>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <strong>photo2</strong>
            <textarea class="image" col="4" name="photo2" placeholder="Ecrire un article">{!! $product_info->photo2 !!}
            </textarea>
            <span class="text-danger">{{ $errors->first('photo2') }}</span>
        </div>
    </div>


    <div class="col-md-4">
        <div class="form-group">
            <strong>photo3</strong>
            <textarea class="image" col="4" name="photo3" placeholder="Ecrire un article">{!! $product_info->photo3 !!}
            </textarea>
            <span class="text-danger">{{ $errors->first('photo3') }}</span>
        </div>
    </div>

    <div class="col-lg-12">
        <button type="submit" class="btn btn-primary">Valider</button>
    </div>
</div>

</form>


@endsection
