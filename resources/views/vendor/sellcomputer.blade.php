@extends('layouts.frontend')

@section('title')
Sell old Laptop
@endsection


@section('content')
<section>
<div class="container" style="margin-top:160px;">
<h2>Select Brand</h2>

  <div class="row">
    @foreach($laptops as $item)
    <div class="col-md-2">
<!-- Card -->

<div  class="card">
  <div class="card-body" id="">
<a href="/sell-product/{{$item->productname}}"><h4>{{$item->productname}}</h4></a>
  </div>
</div>

<!-- Card -->
</div>
@endforeach
</div>
</div>
</section>
@endsection
