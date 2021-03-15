@extends('layouts.frontend')

@section('title')
    Checkout
@endsection

@section('content')

<section class="bg-success">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-2 py-3">
                <h5><a href="/" class="text-dark">Home</a> › Checkout</h5>
            </div>
        </div>
    </div>
</section>

<section class="py-5">
    <div class="container">
  <div class="row">
    <div class="col-md-7">
      <form action="{{url('place-order')}}" method="POST">
        {{csrf_field()}}
    <div class="container">
        <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="">First Name</label>
                <input type="text" name="fname" value="{{Auth::user()->name}}" class="form-control" placeholder="First Name">
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="">Last Name</label>
                <input type="text" name="lname" value="{{Auth::user()->lname}}" class="form-control" placeholder="Last Name">
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="">Phone Number</label>
                <input type="text" name="phone" value="{{Auth::user()->phone}}" class="form-control" placeholder="Phone Number">
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="">Alternate Number</label>
                <input type="text" name="altnumber" value="{{Auth::user()->alternate_phone}}" class="form-control" placeholder="Alternate Number">
              </div>
            </div>

            <div class="col-md-12">
              <div class="form-group">
                <label for="">Address1</label>
                <input type="text" name="address1" value="{{Auth::user()->address1}}" class="form-control" placeholder="Flat Number">
              </div>
            </div>

            <div class="col-md-12">
              <div class="form-group">
                <label for="">Address2</label>
                <input type="text" name="address2" value="{{Auth::user()->address2}}" class="form-control" placeholder="Street">
              </div>
            </div>

            <div class="col-md-4">
              <div class="form-group">
                <label for="">City</label>
                <input type="text" name="city" value="{{Auth::user()->city}}" class="form-control" placeholder="City">
              </div>
            </div>

            <div class="col-md-4">
              <div class="form-group">
                <label for="">State</label>
                <input type="text" name="state" value="{{Auth::user()->state}}" class="form-control" placeholder="State">
              </div>
            </div>

            <div class="col-md-4">
              <div class="form-group">
                <label for="">Pincode</label>
                <input type="number" name="pincode" value="{{Auth::user()->pincode}}" class="form-control" placeholder="Pincode">
              </div>
            </div>

            <div class="col-md-12">
              <div class="form-group">
                <label for="">Email</label>
                <input type="email" name="email" value="{{Auth::user()->email}}" class="form-control" placeholder="Email">
              </div>
            </div>

            <div class="col-md-6">
              <button type="submit" name="place_order_btn" class="btn btn-primary">Place Your Order</button>
            </div>

            <div class="col-md-6">
              <button type="submit"  class="razor-pay-btn btn btn-info btn-block">Razorpay Online</button>

            </div>


        </div>
    </div>
  </form>
  </div>
  <div class="col-md-5">

    @if(isset($cart_data))
        @if(Cookie::get('shopping_cart'))
            @php $total="0" @endphp
            <table class="table">
              <thead>
                <tr>
                  <th>Product</th>
                  <th>Price</th>
                  <th>Qty</th>
                </tr>
              </thead>
              <tbody>
                @foreach($cart_data as $data)

                <tr>
                  <td>{{$data['item_name']}}</td>
                  <td>{{number_format($data['item_price'], 0)}}</td>
                  <td>{{$data['item_quantity']}}</td>
                  @php $total = $total + ($data["item_quantity"] * $data["item_price"]) @endphp
                </tr>

                @endforeach
              </tbody>
            </table>
            <hr>
            <div class="text-right">
              <h5>Grand Total:{{number_format($total),0}}</h5>
            </div>
          </hr>

    @endif

    @else
    <div class="row">
        <div class="col-md-12 mycard py-5 text-center">
            <div class="mycards">
                <h4>Your cart is currently empty.</h4>
                <a href="{{ url('collections') }}" class="btn btn-upper btn-primary outer-left-xs mt-5">Continue Shopping</a>
            </div>
        </div>
    </div>


    @endif
  </div>
</div>
</div>
</section>

@endsection

@section('script')

<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script src="{{asset('assets/js/checkout.js')}}"></script>

@endsection
