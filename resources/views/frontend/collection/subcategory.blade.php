@extends('layouts.frontend')

@section('title')
     Collections -Category
@endsection

@section('content')


<!-- <div class="container-fluid card card-body">
  <div class="row">
  <div class="col-md-12">
  <label for="">Collection/{{$category->group->name}}/{{$category->name}} </label>
  </div>
  </div>

</div> -->

<div class="container-fluid Buildpc">
  <h2 class="Build">Build Your PC</h2>
</div>


<div class="container" style="margin-top:60px;">
  <div class="card">
    <h5 class="card-header text-white bg-dark">For Better Compatibility First Choose Processor.</h5>
    <div class="card-body">
  <div class="row">
  <div class="col-md-2">
    <div class="row">
        @foreach($subcategory as $subcate_item)
      <div class="col-md-12 mb-4">
            <a href="{{url('collection/'.$subcate_item->category->group->url.'/'.$subcate_item->category->url.'/'.$subcate_item->url)}}" class="badge badge-info" >
            <h5 class="mb-0">+{{$subcate_item->name}}</h5>
          </a>
  </div>
    @endforeach

    </div>

    <!-- <a id="filter" href="{{url('collection/'.$subcate_item->category->group->url.'/'.$subcate_item->category->url.'/'.'motherboard')}}">Motherboard</a>

    <input type="" id="filter" value=""> -->


  </div>
  <div class="col-md-10">
      @if(isset($cart_data))
          @if(Cookie::get('shopping_cart'))
              @php $total="0" @endphp
              <div class="shopping-cart">
                  <div class="shopping-cart-table">
                      <div class="table-responsive">
                          <!-- <div class="col-md-12 text-right mb-3">
                              <a href="javascript:void(0)" class="clear_cart font-weight-bold">Clear Cart</a>
                          </div> -->
                          <table class="table table-bordered my-auto  text-center">
                              <thead>
                                  <tr>
                                      <th class="cart-description">Image</th>
                                      <th class="cart-product-name">Product Name</th>
                                      <th class="cart-price">Price</th>
                                      <th class="cart-qty">Quantity</th>
                                      <th class="cart-total">Grandtotal</th>
                                      <th class="cart-romove">Remove</th>
                                  </tr>
                              </thead>
                              <tbody class="my-auto">
                                  @foreach ($cart_data as $data)
                                  <tr class="cartpage">
                                      <td class="cart-image">
                                          <a class="entry-thumbnail" href="javascript:void(0)">
                                              <img src="{{ asset('/uploads/products/'.$data['item_image']) }}" width="70px" alt="">
                                          </a>
                                      </td>
                                      <td class="cart-product-name-info">
                                          <p class='cart-product-description'>
                                              <a href="javascript:void(0)">{{ $data['item_name'] }}</a>

                                          </p>
                                      </td>
                                      <td class="cart-product-sub-total">
                                          <span class="cart-sub-total-price">{{ number_format($data['item_price'], 2) }}</span>
                                      </td>

                                            <td class="cart-product-quantity" width="140px">
                                              <input type="hidden" class="product_id" value="{{ $data['item_id'] }}" >
                                                <div class="input-group quantity">
                                                    <div class="input-group-prepend decrement-btn changeQuantity" style="cursor: pointer">
                                                        <span class="input-group-text">-</span>
                                                    </div>
                                                    <input type="text" class="qty-input form-control" maxlength="2" max="10" value="{{ $data['item_quantity'] }}">
                                                    <div class="input-group-append increment-btn changeQuantity" style="cursor: pointer">
                                                        <span class="input-group-text">+</span>
                                                    </div>
                                                </div>
                                            </td>

                                      <td class="cart-product-grand-total">
                                          <span class="cart-grand-total-price">{{ number_format($data['item_quantity'] * $data['item_price'], 2) }}</span>
                                      </td>
                                      <td style="font-size: 20px;">
                                          <button type="button" class="badge badge-pill badge-danger delete_cart_data"><li class="fa fa-trash-o"></li> Delete</button>
                                      </td>
                                      @php $total = $total + ($data["item_quantity"] * $data["item_price"]) @endphp
                                  </tr>
                                  @endforeach
                              </tbody>
                          </table><!-- /table -->
                      </div>
                  </div><!-- /.shopping-cart-table -->
                  <div class="row">

                      <div class="col-md-8 col-sm-12 estimate-ship-tax">
                          <!-- <div>
                              <a href="{{ url('collections') }}" class="btn btn-upper btn-warning outer-left-xs">Continue Shopping</a>
                          </div> -->
                      </div>

                      <div class="col-md-4 col-sm-12 ">
                          <div  class="card card-body mt-3">
                            <div id="totalajaxcall">
                            <div class="totalpricingload">
                              <div class="row">
                                  <div class="col-md-6">
                                      <h6 class="cart-subtotal-name">Subtotal</h6>
                                  </div>
                                  <div class="col-md-6">
                                      <h6 class="cart-subtotal-price">
                                          Rs.
                                          <span class="cart-grand-price-viewajax">{{ number_format($total, 2) }}</span>
                                      </h6>
                                  </div>
                              </div>
                              <hr>
                              <div class="row">
                                  <div class="col-md-6">
                                      <h6 class="cart-grand-name">Grand Total</h6>
                                  </div>
                                  <div class="col-md-6">
                                      <h6 class="cart-grand-price">
                                          Rs.
                                          <span class="cart-grand-price-viewajax">{{ number_format($total, 2) }}</span>
                                      </h6>
                                  </div>
                              </div>
                              </div>
                            </div>
                              <hr>
                              <div class="row">
                                  <div class="col-md-12">
                                      <div class="cart-checkout-btn text-center">
                                          <!-- @if (Auth::user())
                                              <a href="{{ url('checkout') }}" class="btn btn-success btn-block checkout-btn">PROCCED TO CHECKOUT</a>
                                          @else
                                              <a href="#" data-toggle="modal" data-target="#LoginModal" class="btn btn-success btn-block checkout-btn">PROCCED TO CHECKOUT</a> -->
                                              {{-- you add a pop modal for making a login --}}
                                          <!-- @endif
                                          <h6 class="mt-3">Checkout with ThePcBuilder</h6> -->
                                            <a href="{{url('contact')}}"  class="btn btn-info btn-block">Get A Quote From US</a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>

              </div><!-- /.shopping-cart -->
          @endif
      @else
          <!-- <div class="row">
              <div class="col-md-12 mycard py-5 text-center">
                  <div class="mycards">
                      <h4>Your cart is currently empty.</h4>
                      <a href="{{ url('collections') }}" class="btn btn-upper btn-primary outer-left-xs mt-5">Continue Shopping</a>
                  </div>
              </div>
          </div> -->
      @endif

  </div>
  </div>
</div>
</div>
</div>


@endsection
<script>







</script>
