@extends('layouts.appArticle')

@section('content')
<h2 style="margin-top: 12px;" class="text-center">Add understanding</a></h2>
<br>

<form action="{{ route('understandings.store') }}" method="POST" name="add_understanding">
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
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>

</form>

@endsection
