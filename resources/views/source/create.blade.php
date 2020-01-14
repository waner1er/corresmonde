@extends('layouts.appArticle')

@section('content')
<h2 style="margin-top: 12px;" class="text-center">Add Project</a></h2>
<br>

<form action="{{ route('sources.store') }}" method="POST" name="add_source">
{{ csrf_field() }}

<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <strong>Titre</strong>
            <input type="text" name="sourceTitle" class="form-control" placeholder="Titre de l'article">
            <span class="text-danger">{{ $errors->first('sourceTitle') }}</span>
        </div>
    </div>


    <div class="col-md-12">
        <div class="form-group">
            <strong>Contenu</strong>
            <textarea class="description" col="4" name="sourceContent" placeholder="Ecrire un article"></textarea>
            <span class="text-danger">{{ $errors->first('sourceContent') }}</span>
        </div>
    </div>
    <div class="col-md-12">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>

</form>

@endsection
