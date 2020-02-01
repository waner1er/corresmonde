 @extends('layouts.front')

@section('content')


    <style>
    .rightMenuTitle{
        text-transform: uppercase;
    }
    .title{
        text-align: center;
    }
    .welcome{text-align: center;background: transparent;background:rgba(255,255,255,0.8);border:1px solid #20B2AA;border-radius: 555px 25px 15px 25px/25px 5px 35px 555px;}
    .jumbotron h1 {color:#20B2AA;font-weight: 600;text-shadow:2px 2px 2px #000;font-size: 2.5rem;text-transform: capitalize;}
    .jumbotron .lead {color:#000;font-weight: 500;}

    /* Info-bulle */
    .infobulle {
    text-decoration:none;
    position:relative;
    }
    .infobulle span {
    display:none;
    -moz-border-radius:6px;
    -webkit-border-radius:6px;
    border-radius:6px;
    color:black;
    background-color: #eff1f3;
    font-size:10px;
    }

    .infobulle:hover span
    {
    display:block;
    position:absolute;
    top:50px;
    left:0;
    z-index:1000;
    width:200px;
    max-width:200px;
    min-height:20px;
    border:1px solid black;
    overflow:hidden;
    }
</style>


<div class="row">
    <div class="col-lg-12 mb-5">
        <div class="jumbotron jumbotron-fluid welcome">
            <div class="container">
                <h1 class="">{{ $product_info->title }}</h1>
            </div>
        </div>
    </div>
  <div class="col-lg-12 mb-5">
    @foreach ($products as $product )
    <a class="btn btn-success mx-2 my-2 infobulle" href="{{ route('ressources.edit',$product->id)}}">
      <div>{{ $product->numArticle }}</div>
      <span>{{ $product->title }}</span>
    </a>
    @endforeach
  </div>

    <div class="col-lg-8 mx-auto border mr-5">
      <h1 class="text-success title">{{ $product_info->title }}</h1>


      <div class="mb-5 text-justify">
          <p>
              {!! $product_info->description !!}
          </p>
          <hr class="mt-5">
      </div>

    </div>

    <div class="col-lg-3 border bg-light">
        <h2 class="text-success text-center bg-white rightMenuTitle mt-2 py-2">Images</h2>
        <div class="my-3 text-center bg-light ">
            <a href="{{ $product_info->photo1 }}" data-toggle="lightbox"data-gallery="photos">
            <img width="100%" src="{{ $product_info->photo1 }}" alt="">
            </a>
        </div>


        <div class="my-3 text-center bg-light">
            <a href="{{ $product_info->photo2 }}" data-toggle="lightbox"data-gallery="photos">
              <img width="100%" src="{{ $product_info->photo2 }}" alt="">
            </a>
        </div>
        <div class="my-3 text-center bg-light">
            <a href="{{ $product_info->photo3 }}" data-toggle="lightbox"data-gallery="photos">
              <img width="100%" src="{{ $product_info->photo3 }}" alt="">
            </a>
        </div>
    </div>

      </div>

</div>
{!! $products->links() !!}


<script>


</script>
@endsection
