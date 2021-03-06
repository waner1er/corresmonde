@extends('layouts.back')

@section('content')
<h2  class="my-5 text-center text-success">Objectifs</a></h2>
<br>

<form action="{{ route('projects.store') }}" method="POST" name="add_project">
{{ csrf_field() }}

<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <strong>Titre</strong>
            <input type="text" name="projectTitle" class="form-control" placeholder="Titre de l'article">
            <span class="text-danger">{{ $errors->first('projectTitle') }}</span>
        </div>
    </div>


    <div class="col-md-12">
        <div class="form-group">
            <strong>Contenu</strong>
            <textarea class="description" col="4" name="projectContent" placeholder="Ecrire un article"></textarea>
            <span class="text-danger">{{ $errors->first('projectContent') }}</span>
        </div>
    </div>
    <div class="col-md-12">
        <button type="submit" class="btn btn-primary">Valider</button>
    </div>
</div>

</form>

@endsection
