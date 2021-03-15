@extends('layouts.frontend')

@section('title')
Home
@endsection


@section('content')

@include('frontend.slider.slider')

<style>
.col-md-4{

  text-align: center;
    display: block;
}

.Pcspecs{

  margin-top:30px;
  z-index:20;
}

.specssec{

margin-top:50px;
  position:relative;
  /* height:400px; */
  background-image:linear-gradient(to right, #003366 0%, #00ffff 100%);

}



</style>

<section class="Pcspecs">

<h2 class="text-center mb-5">Explore Our Custom Build</h2>
<!-- Card deck -->
<div class="container" >
<div class="card-deck">

  <!-- Card -->
  <div class="card mb-4">

    <!--Card image-->
    <div class="view overlay">

      <a href="#!">
        <div class="mask rgba-white-slight"></div>
      </a>
    </div>

    <!--Card content-->
    <div class="card-body ">

      <!--Title-->
      <h4 class="card-title">Gaming Pc's</h4>
      <!--Text-->
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
        content.</p>
      <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
      <button type="button" class="btn btn-dark btn-md">Read more</button>

    </div>

  </div>
  <!-- Card -->

  <!-- Card -->
  <div class="card mb-4">

    <!--Card image-->
    <div class="view overlay">

      <a href="#!">
        <div class="mask rgba-white-slight"></div>
      </a>
    </div>

    <!--Card content-->
    <div class="card-body">

      <!--Title-->
      <h4 class="card-title">AI/Gaming PC's</h4>
      <!--Text-->
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
        content.</p>
      <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
      <button type="button" class="btn btn-dark btn-md">Read more</button>

    </div>

  </div>
  <!-- Card -->

  <!-- Card -->
  <div class="card mb-4">

    <!--Card image-->
    <div class="view overlay">

      <a href="#!">
        <div class="mask rgba-white-slight"></div>
      </a>
    </div>

    <!--Card content-->
    <div class="card-body">

      <!--Title-->
      <h4 class="card-title">Business PC's</h4>
      <!--Text-->
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
        content.</p>
      <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
      <button type="button" class="btn btn-dark btn-md">Read more</button>

    </div>

  </div>
  <!-- Card -->

</div>
</div>
<!-- Card deck -->


</section>

<section class="specssec">
  <div class="container" style="padding:150px 0 150px 0;">
  <div class="card-deck">

    <!-- Card -->
    <div class="card mb-4 rounded">

      <!--Card image-->
      <div class="view overlay">

        <a href="#!">
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>

      <!--Card content-->
      <div class="card-body ">

        <!--Title-->
        <h4 class="card-title">Gaming Pc's</h4>
        <!--Text-->
        <p class="card-text">For gamers, we understand that each and every frame count and how frustrating it gets when your
system loses its cool.
</p>
        <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->


      </div>

    </div>
    <!-- Card -->

    <!-- Card -->
    <div class="card mb-4 rounded">

      <!--Card image-->
      <div class="view overlay">

        <a href="#!">
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>

      <!--Card content-->
      <div class="card-body">

        <!--Title-->
        <h4 class="card-title">AI/Gaming PC's</h4>
        <!--Text-->
        <p class="card-text">Processing huge data sets is challenging. You need a system that’s reliable and fast enough to make
sure there aren’t any miscalculation due to lack of performance.</p>
        <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->


      </div>

    </div>
    <!-- Card -->

    <!-- Card -->
    <div class="card mb-4 rounded">

      <!--Card image-->
      <div class="view overlay">

        <a href="#!">
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>

      <!--Card content-->
      <div class="card-body">

        <!--Title-->
        <h4 class="card-title">Video Editing  PC's</h4>
        <!--Text-->
        <p class="card-text">If you are video editing, each fraction of second is important to tweak your shots to perfection. Your
system must deliver that extra horsepower when you need it the most</p>
        <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->


      </div>

    </div>
    <!-- Card -->

  </div>
  </div>


</section>



@endsection
