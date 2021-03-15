@extends('layouts.frontend')

@section('title')
    {{$products->meta_title}}
@endsection
@section('meta_desc')
{{$products->meta_descrip}}
@endsection

@section('meta_tags')
{{$products->meta_keyword}}
@endsection

@section('content')


<div class="container-fluid card card-body">
  <div class="row">
  <div class="col-md-12">
  <label for=""></label>
  </div>
  </div>

</div>


<div class="container" style="margin-top:60px;">
  <div class="product_data">
  <div class="row">


  <div class="col-md-12">
    <div class="row">

      <div class="col-md-12 mb-3">
        <div class="row">

          <div class="col-md-5">
            <div class="border">
          <img src="{{asset('uploads/products/'.$products->image)}}" class="w-100" alt="">
        </div>
        </div>

        <div class="col-md-7">

          <div class="py-2">
            <small class="text-gray mb-0">
              Collection/
              {{$products->subcategory->category->group->name}}/
              {{$products->subcategory->category->name}}/
              {{$products->subcategory->name}}/
              {{$products->name}}
            </small>
          </div>
          <div class="py-2">
            <!-- <a href="{{url('/customize/'.$products->id)}}" class="badge badge-dark">Customize</a> -->
          </div>
          <div class="product-heading py-2 border-top">
            <h5 class="mb-0 font-weight-bold">{{$products->name}}</h5>
          </div>

          <div class="py-2">
            <small>Rating:<i class="fa fa-star"></i></small>
            <small class="font-italic badge badge-primary ml-3 px-2">{{$products->sale_tag}}</small>
          </div>


          <div class="product-price">


            <h5>
              <span class="offer-price">₹ {{number_format($products->price)}}</span>
              <span class="offer-price"><s>₹ {{number_format($products->offer_tag)}}</s></span>
            </h5>

          </div>

          <div class="py-3">
            <!-- <a href="{{url('calculator/'.$products->id)}}" class="btn btn-info">Get Exact Value</a> -->
            <div class="row">
              <div class="col-md-2 col-3">
                <input type="hidden" class="product_id" value="{{$products->id}}">
                <input type="number" class="qty-input form-control" value="1" min="1" max="100">
              </div>
              <div class="col-md-6 col-6">
                <button type="button" class="add-to-cart-btn btn btn-danger m-0 py-2 px-3">Add to cart</button>
              </div>


            </div>
            <div class="border-top small_product_description py-2">
              {!!$products->small_description!!}
            </div>
          </div>
        </div>

        </div>






  </div>

  </div>

    </div>


    <div class="col-md-12">
      <div class="product_highlights py-2 border-top">
      <div class="card">
    <div class="card-header">
      <h6 class="mb-0 font-weight-bold highlight-heading">{{$products->p_highlight_heading}}</h6>
    </div>
    <div class="card-body">
      {!!$products->p_highlights!!}
    </div>
      </div>

      </div>
      <div class="product_highlights py-2 border-top">
      <div class="card">
    <div class="card-header">
      <h6 class="mb-0 font-weight-bold highlight-heading">{{$products->p_description_heading}}</h6>
    </div>
    <div class="card-body">
      {!!$products->p_description!!}
    </div>
      </div>

      </div>
      <div class="product_highlights py-2 border-top">
      <div class="card">
      <div class="card-header">
      <h6 class="mb-0 font-weight-bold highlight-heading">{{$products->p_det_heading}}</h6>
      </div>
      <div class="card-body">
      {!!$products->p_details!!}
      </div>
      </div>

      </div>

    </div>

  </div>
  </div>

  </div>



@endsection
