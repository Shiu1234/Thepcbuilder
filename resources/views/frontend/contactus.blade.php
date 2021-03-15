@extends('layouts.frontend')

@section('title')
Get A Quote From Us
@endsection


@section('content')

<style>

.getquote{

  margin-top:30px;
}
</style>
<div class="container getquote">
<div class="row">
<div class="col-md-7">
  <form action="{{url('get-quote')}}" method="POST">
    {{csrf_field()}}
<div class="container">
    <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="">First Name</label>
            <input type="text" name="fname"  class="form-control" placeholder="First Name">
          </div>
        </div>

        <div class="col-md-6">
          <div class="form-group">
            <label for="">Last Name</label>
            <input type="text" name="lname"  class="form-control" placeholder="Last Name">
          </div>
        </div>

        <div class="col-md-6">
          <div class="form-group">
            <label for="">Phone Number</label>
            <input type="text" name="phone" class="form-control" placeholder="Phone Number">
          </div>
        </div>

        <div class="col-md-6">
          <div class="form-group">
            <label for="">Alternate Number</label>
            <input type="text" name="altnumber" class="form-control" placeholder="Alternate Number">
          </div>
        </div>

        <div class="col-md-12">
          <div class="form-group">
            <label for="">Address1</label>
            <input type="text" name="address1"  class="form-control" placeholder="Flat Number">
          </div>
        </div>

        <div class="col-md-12">
          <div class="form-group">
            <label for="">Address2</label>
            <input type="text" name="address2"  class="form-control" placeholder="Street">
          </div>
        </div>

        <div class="col-md-4">
          <div class="form-group">
            <label for="">City</label>
            <input type="text" name="city"  class="form-control" placeholder="City">
          </div>
        </div>

        <div class="col-md-4">
          <div class="form-group">
            <label for="">State</label>
            <input type="text" name="state"  class="form-control" placeholder="State">
          </div>
        </div>

        <div class="col-md-4">
          <div class="form-group">
            <label for="">Pincode</label>
            <input type="number" name="pincode"  class="form-control" placeholder="Pincode">
          </div>
        </div>

        <div class="col-md-12">
          <div class="form-group">
            <label for="">Email</label>
            <input type="email" name="email"  class="form-control" placeholder="Email">
          </div>
        </div>
        <div class="col-md-12">
          <div class="form-group">
            <label for="">Password</label>
            <input type="text" name="password"  class="form-control" placeholder="Password">
          </div>
        </div>

        <div class="col-md-6">
          <!-- <button type="submit" name="place_order_btn" class="btn btn-primary">Place Your Order</button> -->
        </div>

        <div class="col-md-6">
          <button type="submit"  class="btn btn-info btn-block">SUBMIT</button>

        </div>


    </div>
</div>
</form>
</div>
</div>
</div>

@endsection
