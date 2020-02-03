@extends('layouts.front')

@section('content')
<style>
    .welcome{text-align: center;background: transparent;background:rgba(255,255,255,0.8);border:1px solid #20B2AA;border-radius: 555px 25px 15px 25px/25px 5px 35px 555px;}
        .jumbotron h1 {color:#20B2AA;font-weight: 600;text-shadow:2px 2px 2px #000;font-size: 3.5rem;text-transform: capitalize;}
        .jumbotron .lead {color:#000;font-weight: 500;}

        #map{height:800px;}
        @media(min-width:992px){
            /* .parcours{height: 837px;overflow: scroll;} */
        }
        @media(max-width:439px){
        .container h1{font-size:2.5rem;}
    }
    @media(max-width:316px){

        .container h1{font-size:2rem;}
    }
    </style>

<div class="col-lg-12">
    <div class="jumbotron jumbotron-fluid welcome col-lg-12">
        <div class="container">
        <h1 class="">Informations principales des pays du monde</h1>
        </div>
    </div>
    <div class="col-lg-12 p-4">
        <div id="main-container">
        <div class="text-center" id="flag-container">
            <img width="35%"src="" alt="">
        </div>
        </div>
    </div>

    <div class="col-lg-12 text-center p-2">

        <table class="table table-striped">

            <tbody>
                <tbody>
                    <select id="countries" class="custom-select my-3"></select>

                    <tr>
                    <th scope="row">Capitale</th>
                    <td id="capital"></td></td>

                    </tr>
                    <tr>
                    <th scope="row">Population</th>
                    <td id="population"></td>

                    </tr>
                    <tr>
                    <th scope="row">Region</th>
                    <td id="region"></td>
                    </tr>
                    <tr>
                    <th scope="row">Langues</th>
                    <td id="languages"></td>
                    </tr>
                    <th scope="row">lattitude</th>
                    <td id="Lat"></td>
                    </tr>
                    <th scope="row">longitude</th>
                    <td id="Lon"></td>
                    </tr>

            </tbody>
        </table>
    </div>
</div>
<div class="container">
    <div id="map"></div>
</div>
</div>


<script>

</script>
<script src="{{ URL::asset('js/map2.js') }}"></script>

@endsection
