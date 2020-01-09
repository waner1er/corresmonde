@extends('layouts.edit')

@section('content')
<h2 style="margin-top: 12px;" class="text-center">Add Project</a></h2>
<br>

<form action="{{ route('deroules.store') }}" method="POST" name="add_deroule">
{{ csrf_field() }}

<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <strong>Titre</strong>
            <input type="text" name="derouleTitle" class="form-control" placeholder="Titre de l'article">
            <span class="text-danger">{{ $errors->first('derouleTitle') }}</span>
        </div>
    </div>


    <div class="col-md-12">
        <div class="form-group">
            <strong>Contenu</strong>
            <textarea class="description" col="4" name="derouleContent" placeholder="Ecrire un article"></textarea>
            <span class="text-danger">{{ $errors->first('derouleContent') }}</span>
        </div>
    </div>
    <div class="col-md-12">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>

</form>

@endsection
