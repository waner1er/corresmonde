@extends('layouts.back')
@section('content')


<style>
.card-header{
text-transform:capitalize;
}
.newUser{
    justify-content: space-around
}
</style>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                @guest
                <div class="card-header text-center"><h2>Bienvenue  !!</h2></div>
                @else
                <div class="card-header">Bienvenue {{ Auth::user()->name }}  !!
                </div>
                @endguest

                <div class="card-body">
                    @guest

                    <h1 class="text-success">Vous êtes connecté sur l'espace élèves</h1>
                </div>
            </div>
            <br>
                    @else
        <h1 class="text-success text-center">Vous êtes connecté sur l'espace Administrateur</h1>
                </div>
    </div>
            <br>
    <div class="row newUser">
                <div>
                    <h3>Enregistrer un nouvel administrateur :</h3>
                </div>

                <div>
                    <a class="btn btn-success" href="{{ route('register') }}">Inscription</a>
                </div>

            </div>
            @endguest

</div>

    </div>
</div>
@endsection
