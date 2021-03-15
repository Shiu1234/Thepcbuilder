@extends('layouts.admin')

@section('content')

<div class="container-fluid mt-5">

<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-body">

        <h6 class="mb-0">Collections/Products Add Form</h6>

      </div>
    </div>
  </div>
</div>

<div class="row mt-3">
  <div class="col-md-12">
    <div class="card">
      @if (session('status'))
      <div class="alert alert-warning alert-dismissible fade show" role="alert">
<strong>Hey!</strong> {{ session('status') }}
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
  <span aria-hidden="true">&times;</span>
</button>
</div>


      @endif
      <div class="card-body">
        <form action="{{url('update-product/'.$products->id)}}" method="POST" enctype="multipart/form-data">
          {{csrf_field()}}

          {{method_field('PUT')}}

        <ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#products" role="tab" >Products</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#description" role="tab" >Description</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#seo" role="tab" >SEO</a>
  </li>

  <li class="nav-item" role="presentation">
    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#productstatus" role="tab">Product Status</a>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="products" role="tabpanel" aria-labelledby="home-tab">
    <div class="row mt-3">

      <div class="col-md-6">
      <div class="form-group">
        <label for="">Product Name</label>
        <input type="text" name="name" value="{{$products->name}}" class="form-control" placeholder="Enter name">
      </div>
    </div>
      <div class="col-md-6">

        <div class="form-group">
          <label for="">Subcategory(Name)</label>
          <select class="form-control" name="sub_category_id" >
            <option value="{{$products->sub_category_id}}">{{$products->subcategory->name}}</option>
            @foreach($subcategory as $subcateitem)
            <option value="{{$subcateitem->id}}">{{$subcateitem->name}}</option>
            @endforeach
          </select>
        </div>
        </div>
        <div class="col-md-12">
        <div class="form-group">
          <label for="">Custom Url(slug)</label>
          <input type="text" name="url" value="{{$products->url}}"class="form-control" placeholder="Enter name">
        </div>
        </div>
        <div class="col-md-12">
        <div class="form-group">
          <label for="">Small Description</label>
          <textarea rows="4" name="small_description" id="summernote_smalldesc" value="" class="form-control" placeholder="Enter Description">{{$products->small_description}}</textarea>
        </div>
        </div>

        <div class="col-md-9">
        <div class="form-group">
          <label for="">Prodcut Image</label>
          <input type="file" name="image"class="form-control" >
          <img src="{{asset('uploads/products/'.$products->image)}}" width="60px" >
        </div>
        </div>

        <div class="col-md-3">
        <div class="form-group">
          <label for="">Sale tag</label>
          <input type="text" value="{{$products->sale_tag}}" name="sale_tag"class="form-control" >
        </div>
        </div>

        <div class="col-md-3">
        <div class="form-group">
          <label for="">Original Price</label>
          <input type="number" value="{{$products->price }}" name="price"class="form-control" >
        </div>
        </div>
        <div class="col-md-3">
        <div class="form-group">
          <label for="">Offer_price</label>
          <input type="number" value="{{$products->offer_tag  }}"  name="offer_tag" class="form-control" placeholder="">
        </div>
        </div>
        <div class="col-md-3">
        <div class="form-group">
          <label for="">Quantity</label>
          <input type="number" name="quality" value="{{$products->quality }}" class="form-control" placeholder="">
        </div>

        </div>

        <div class="col-md-3">
        <div class="form-group">
          <label for="">Priority</label>
          <input type="number" value="{{$products->priority }}"  name="priority" class="form-control" placeholder="">
        </div>

        </div>
    </div>
  </div>


  <div class="tab-pane fade" id="description" role="tabpanel" aria-labelledby="profile-tab">
    <div class="row mt-3">
    <div class="col-md-12">
    <div class="form-group">
      <label for="">Highlights</label>
      <input type="text" class="form-control" value="{{$products->p_highlight_heading}}" Placeholder="Highlight heading" name="p_highlight_heading">
      <textarea rows="4" name="p_highlights" id="summernote_highlights" class="form-control" placeholder="Enter Highlights">{{$products->p_highlights}}</textarea>
    </div>
    </div>
    <div class="col-md-12">
    <div class="form-group">
      <label for="">Product Description</label>
          <input type="text" class="form-control" value="{{$products->p_description_heading }}" Placeholder="Product Description" name="p_description_heading">
      <textarea rows="4" name="p_description" id="summernote_product_descrip"  class="form-control" placeholder="Enter Product Description">{{$products->p_description }}</textarea>
    </div>
    </div>
    <div class="col-md-12">
    <div class="form-group">
      <label for="">Product Details</label>
          <input type="text" class="form-control" value="{{$products->p_det_heading }}" Placeholder="Product details" name="p_det_heading">
      <textarea rows="4" name="p_details" id="summernote_details" class="form-control" placeholder="Enter Product etails">{{$products->p_details }}</textarea>
    </div>
    </div>
  </div>
  </div>


  <div class="tab-pane fade" id="seo" role="tabpanel" aria-labelledby="contact-tab">
    <div class="row mt-3">
    <div class="col-md-12">
    <div class="form-group">
      <label for="">Meta Title</label>
      <textarea rows="4" name="meta_title" class="form-control" placeholder="Meta Title">{{$products->meta_title }}</textarea>
    </div>
    </div>
    <div class="col-md-12">
    <div class="form-group">
      <label for="">Meta Description</label>
      <textarea rows="4" name="meta_descrip" class="form-control" placeholder="Meta Description">{{$products->meta_descrip }}</textarea>
    </div>
    </div>
    <div class="col-md-12">
    <div class="form-group">
      <label for="">Keywords</label>
      <textarea rows="4" name="meta_keyword" class="form-control" placeholder="keywords">{{$products->meta_keyword}}</textarea>
    </div>
    </div>
  </div>
  </div>


<div class="tab-pane fade" id="productstatus" role="tabpanel" aria-labelledby="contact-tab">

<div class="row ">

  <div class="col-md-3">
  <div class="form-group">
    <label for="">New arrivals</label>
    <input type="checkbox" name="new_arrival_products" {{$products->new_arrival_products == '1' ? 'checked' :''}} class="" placeholder="">
  </div>

  </div>

  <div class="col-md-3">
  <div class="form-group">
    <label for="">Featured Products</label>
    <input type="checkbox" name="featured_products" {{$products->featured_products == '1' ? 'checked' :''}} class="" placeholder="">
  </div>

  </div>

  <div class="col-md-3">
  <div class="form-group">
    <label for="">Popular Products</label>
    <input type="checkbox" name="popular_products" {{$products->popular_products == '1' ? 'checked' :''}} class="" placeholder="">
  </div>

  </div>
  <div class="col-md-3">
  <div class="form-group">
    <label for="">Offer Products</label>
    <input type="checkbox" name="offers_products" {{$products->offers_products == '1' ? 'checked' :''}} class="" placeholder="">
  </div>

  </div>

  <div class="col-md-3">
  <div class="form-group">
    <label for="">Show/Hide</label>
    <input type="checkbox" name="status" value="{{$products->status == '1' ? 'checked' :''}}" class="" placeholder="">
  </div>

  </div>

</div>


      </div>

      <div class="form-group mt-3 text-right">
        <button type="submit" class="btn btn-primary">Update</button>


      </div>

  </form>

  </div>
</div>
</div>
</div>
</div>
</div>




@endsection

@section('scripts')
<script>
 $('#summernote_smalldesc').summernote({
   placeholder: 'Hello Bootstrap 4',
   tabsize: 2,
   height: 100
 });

 $('#summernote_highlights').summernote({
   placeholder: 'Hello Bootstrap 4',
   tabsize: 2,
   height: 100
 });

 $('#summernote_product_descrip').summernote({
   placeholder: 'Hello Bootstrap 4',
   tabsize: 2,
   height: 100
 });

 $('#summernote_details').summernote({
   placeholder: 'Hello Bootstrap 4',
   tabsize: 2,
   height: 100
 });
</script>
@endsection
