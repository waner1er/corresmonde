@extends('layouts.appArticle')

@section('content')
<h2 class="my-5 text-success text-center">Comprendre les migrations</h2>
<form class="my-5"action="{{ route('understandings.store') }}" method="POST" name="add_understanding">
{{ csrf_field() }}

<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <strong>Titre</strong>
            <input type="text" name="understandingTitle" class="form-control" placeholder="Titre de l'article">
            <span class="text-danger">{{ $errors->first('understandingTitle') }}</span>
        </div>
    </div>


    <div class="col-md-12">
        <div class="form-group">
            <strong>Contenu</strong>
            <textarea class="description" col="4" name="understandingContent" placeholder="Ecrire un article"></textarea>
            <span class="text-danger">{{ $errors->first('understandingContent') }}</span>
        </div>
    </div>
    <div class="col-md-12">
        <button type="submit" class="btn btn-primary">Valider</button>
    </div>
</div>

</form>

@endsection
