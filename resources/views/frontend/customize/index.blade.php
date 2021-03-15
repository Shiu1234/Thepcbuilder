@extends('layouts.frontend')

@section('title')
     Collections -Category -Subcategory -Products -customize
@endsection

@section('content')


<div class="container-fluid card card-body">
  <div class="row">

  </div>

</div>


<div class="container" style="margin-top:60px;">
  <div class="row">



  <div class="col-md-12">
    <div class="row">

      <div class="col-md-3 mb-4">

          <img src="{{asset('uploads/products/'.$product->image)}}" class="w-100" alt="">

          <div class="card-body bg-light">
            <a href="" class="text-center">
            <h4 class="mb-0">{{$product->name}}</h4>
          </a>
          {!!$product->p_highlights!!}
          </div>


  </div>
</a>
  </div>

    </div>
  </div>
  </div>

</div>

@endsection
