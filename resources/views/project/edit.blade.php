@extends('layouts.edit')

@section('content')
<h2 style="margin-top: 12px;" class="text-center">Le projet</a></h2>
<br>

<form style="width:100%"action="{{ route('projects.update', $project_info->id) }}" method="POST" name="update_project">
{{ csrf_field() }}
@method('PATCH')

<div class="row">
    <div class="col-lg-12">
        <div class="form-group">
            <strong>Titre</strong>
            <input type="text" name="projectTitle" class="form-control" value="{{ $project_info->projectTitle }}">
            <span class="text-danger">{{ $errors->first('projectTitle') }}</span>
        </div>
    </div>
    

    <div class="col-lg-12">
        <div class="form-group">
            <strong>Contenu</strong>
            <textarea style="height:550px;"class="description" name="projectContent"  name="projectContent" placeholder="Enter projectContent" >{{ $project_info->projectContent }}</textarea>
            <span class="text-danger">{{ $errors->first('projectContent') }}</span>
        </div>
    </div>

    <div class="col-lg-12">
        <button type="submit" class="btn btn-primary">Valider</button>
    </div>
</div>

</form>
@endsection
