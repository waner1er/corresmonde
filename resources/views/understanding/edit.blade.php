@extends('layouts.appArticle')

@section('content')
<link rel="stylesheet" href="../../css/sandstone.css">
<link rel="stylesheet" href="../../css/adminCss.css">
<h2 style="margin-top: 12px;" class="text-center">Le projet</a></h2>
<br>

<form style="width:100%"action="{{ route('understandings.update', $understanding_info->id) }}" method="POST" name="update_understanding">
{{ csrf_field() }}
@method('PATCH')

<div class="row">
    <div class="col-lg-12">
        <div class="form-group">
            <strong>Titre</strong>
            <input type="text" name="understandingTitle" class="form-control" value="{{ $understanding_info->understandingTitle }}">
            <span class="text-danger">{{ $errors->first('understandingTitle') }}</span>
        </div>
    </div>


    <div class="col-lg-12">
        <div class="form-group">
            <strong>Contenu</strong>
            <textarea style="height:550px;"class="description" name="understandingContent"   placeholder="" >{{ $understanding_info->understandingContent }}</textarea>
            <span class="text-danger">{{ $errors->first('understandingContent') }}</span>
        </div>
    </div>

    <div class="col-lg-12">
        <button type="submit" class="btn btn-primary">Valider</button>
    </div>
</div>

</form>

@endsection
