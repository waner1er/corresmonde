@extends('layouts.appArticle')

@section('content')
<link rel="stylesheet" href="../../css/sandstone.css">
<link rel="stylesheet" href="../../css/adminCss.css">

<form style="width:100%"action="{{ route('rencontres.update', $rencontre_info->id) }}" method="POST" name="update_rencontre">
{{ csrf_field() }}
@method('PATCH')

<div class="row">
    <div class="col-lg-12 text-success"><h2>Modifier</h2></div>
    <div class="col-lg-12">
        <div class="form-group">
            <strong>Titre</strong>
            <input type="text" name="rencontreTitle" class="form-control" value="{{ $rencontre_info->rencontreTitle }}">
            <span class="text-danger">{{ $errors->first('rencontreTitle') }}</span>
        </div>
    </div>


    <div class="col-lg-12">
        <div class="form-group">
            <strong>Contenu</strong>
            <textarea style="height:550px;"class="description" name="rencontreContent"   placeholder="" >{{ $rencontre_info->rencontreContent }}</textarea>
            <span class="text-danger">{{ $errors->first('rencontreContent') }}</span>
        </div>
    </div>

    <div class="col-lg-12">
        <button type="submit" class="btn btn-primary">Valider</button>
    </div>
</div>

</form>

@endsection
