<!--Carousel Wrapper-->

<style>

.d-block{

height:100vh;

}

.jumbotron{


  min-height: 100%;  /* Fallback for browsers do NOT support vh unit */
  min-height: 100vh; /* These two lines are counted as one :-)       */

  display: flex;
  align-items: center;

}

.slide1
{

  background-image: url("assets/img/brands/gvgvg.jpg");
  background-repeat: no-repeat;
background-size: cover;
   height: 100vh;
  width:100%;
  background-position: center center;
  overflow-y: hidden ! important;
    overflow-x: hidden ! important;

}


.slide2
{

  background-image: url("assets/img/brands/word3.jpg");
  background-repeat: no-repeat;
background-size: cover;
   height: 100vh;
  width:100%;
  background-position: center center;
  overflow-y: hidden ! important;
    overflow-x: hidden ! important;

}


.slide3
{

  background-image: url("assets/img/brands/wordp.jpg");
  background-repeat: no-repeat;
background-size: cover;
   height: 100vh;
  width:100%;
  background-position: center center;
  overflow-y: hidden ! important;
    overflow-x: hidden ! important;

}

.carousel-content {
  position: absolute;
  top: 45%;
  left: 15%;
  z-index: 20;
  color: white;
  text-shadow: 0 1px 2px rgba(0,0,0,.6);
}




</style>

<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="jumbotron  slide1">
        <div class="row">
          <div class="col-md-6 justify-content-center" style="color:#ffffff;">
            <h1 class="display-4 px-4 ">GAMING DESKTOP</h1>
            <p class="lead px-4 ">We design and build power houses for gamers, video editors, data scientists and just anyone who is
serious about their PC.</p>
          </div>
          <div class="col-md-6">
          </div>
        </div>

  </div>
    </div>
    <div class="carousel-item">
      <div class="jumbotron  slide2">
        <div class="row">
          <div class="col-md-6" style="color:#ffffff;">
            <h1 class="display-4 px-4 ">VIDEO EDITING DESKTOP</h1>
            <p class="lead px-4 ">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
          </div>
          <div class="col-md-6">
          </div>
        </div>

  </div>
    </div>
    <div class="carousel-item bh">
      <div class="jumbotron  slide3">
        <div class="row">
          <div class="col-md-6" style="color:#ffffff; ">
            <h1 class="display-4 px-4 ">AI/ML DESKTOP</h1>
            <p class="lead px-4 ">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
          </div>
          <div class="col-md-6">
          </div>
        </div>

  </div>
    </div>
  </div>
  <!-- <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a> -->
</div>
