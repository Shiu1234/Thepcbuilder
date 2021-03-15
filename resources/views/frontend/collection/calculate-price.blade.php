@extends('layouts.frontend')

@section('title')
     Collections -Category -Subcategory -Products
@endsection

@section('content')


<div class="container-fluid card card-body">
  <div class="row">
  <div class="col-md-12">

  </div>
  </div>

</div>


<style>

.tab {
  display: none;
}

.form-check{

  border:2px solid #F0F0F0 ;
   border-radius: 5px;
   padding:5px 5px ;
   background-color: #F0F0F0;
}

</style>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-10">
      <div class="card " style="height:40rem;">

        <div class="card-body">
      <form id="regForm" action="" method="" >

        <div class="tab">
          <h4 class="text-center"><b>System Configuration</b></h4>
          <div class="form-group">
          <label>Processor</label>
          <select class="form-control" placeholder="First name..." oninput="this.className = ''" name="processor">
            <option >Intel Core i3 </option>
            <option >Intel Core i5 </option>
            <option >Intel Core i7 </option>
          </select>
          </div>
          <div class="form-group">
            <label>RAM</label>
          <select class="form-control" placeholder="Last name..." oninput="this.className = ''" name="RAM">
            <option >1GB </option>
            <option >4GB </option>
            <option >16GB </option>

          </select>
          </div>
          <div class="form-group">
            <label>Hard disk</label>
          <select class="form-control" placeholder="Last name..." oninput="this.className = ''" name="RAM">
            <option >1TB </option>
            <option >60GB </option>
            <option >80GB </option>

          </select>
          </div>
        </div>
        <div class="tab">
          <h4 class="text-center"><b>Additional Features</b></h4>
          <h5>Touch Screen</h5>
          <p><small>Check Your screen</small></p>
          <div class="form-group form-inline  ">


          <div class="form-check  mx-3 " >
        <input type="radio" class="form-check-input" id="materialUnchecked" name="materialExampleRadios">
        <label class="form-check-label" for="materialUnchecked">Touch Screen available</label>
      </div>

      <div class="form-check  mx-3">
      <input type="radio" class="form-check-input" id="materialUnchecked" name="materialExampleRadios">
      <label class="form-check-label" for="materialUnchecked">Touch Screen not available</label>
      </div>

      <div class="form-check  mx-3 "  >
      <input type="radio"  class="form-check-input" id="materialUnchecked" name="materialExampleRadios">
      <label class="form-check-label" for="materialUnchecked">Touch Screen not working</label>
      </div>
      </div>


      <h5>Screen size</h5>
        <p><small>Check Your device's screen size</small></p>
      <div class="form-group form-inline  ">


      <div class="form-check  mx-3 ">
      <input type="radio" class="form-check-input" id="materialUnchecked" name="materialExampleRadios">
      <label class="form-check-label" for="materialUnchecked">10-11 inch</label>
      </div>

      <div class="form-check  mx-3">
      <input type="radio" class="form-check-input" id="materialUnchecked" name="materialExampleRadios">
      <label class="form-check-label" for="materialUnchecked">12-13 inch</label>
      </div>

      <div class="form-check  mx-3 "  >
      <input type="radio"  class="form-check-input" id="materialUnchecked" name="materialExampleRadios">
      <label class="form-check-label" for="materialUnchecked">14-15 inch</label>
      </div>
      <div class="form-check  mx-3 "  >
      <input type="radio"  class="form-check-input" id="materialUnchecked" name="materialExampleRadios">
      <label class="form-check-label" for="materialUnchecked">Above 15 inch</label>
      </div>
      </div>




      <h5>External Graphics Card (NVIDIA/ AMD)
      </h5>
        <p><small>Check your device's external graphics cards</small></p>
      <div class="form-group form-inline  ">


      <div class="form-check  mx-3 ">
      <input type="radio" class="form-check-input" id="materialUnchecked" name="materialExampleRadios">
      <label class="form-check-label" for="materialUnchecked">Graphics Card available</label>
      </div>

      <div class="form-check  mx-3">
      <input type="radio" class="form-check-input" id="materialUnchecked" name="materialExampleRadios">
      <label class="form-check-label" for="materialUnchecked">Graphics Card not available</label>
      </div>

      <div class="form-check  mx-3 "  >
      <input type="radio"  class="form-check-input" id="materialUnchecked" name="materialExampleRadios">
      <label class="form-check-label" for="materialUnchecked">Graphics Card not working</label>
      </div>
      </div>
        </div>

        <div class="tab">
          <h4 class="text-center">Functional Condition</h4>

          <div class=" form-inline">
            <div class="form-group mx-3">


              <label >Screen not working, discoloration, blur, line/spots</label>

              <input type="checkbox" name="screen_distort">
            </div>
            


            <div class="form-group mx-3">


              <label >Keyboard not working; key(s) missing/not working</label>

              <input type="checkbox" name="screen_distort">
            </div>



            <div class="form-group mx-3">


              <label >CD/DVD Drive not working</label>

              <input type="checkbox" name="screen_distort">
            </div>



            <div class="form-group mx-3">


              <label >Touchpad not working; Left/Right click faulty</label>

              <input type="checkbox" name="screen_distort">
            </div>




          </div>

          <div class=" form-inline">
            <div class="form-group mx-3">


              <label >Battery Dead; back up less than 30 minutes</label>

              <input type="checkbox" name="screen_distort">
            </div>



            <div class="form-group mx-3">


              <label >Wifi not working</label>

              <input type="checkbox" name="screen_distort">
            </div>



            <div class="form-group mx-3">


              <label >Faulty Charger; wire cut, Not available</label>

              <input type="checkbox" name="screen_distort">
            </div>


            <div class="form-group mx-3">


              <label >USB port not working</label>

              <input type="checkbox" name="screen_distort">

            </div>



          </div>

        </div>
        <div class="tab">
          <div class=" form-inline">
            <div class="form-group mx-3">


              <label class="card-title">Flawless</label>
              <div class="card-body">
              <input type="checkbox" name="screen_distort">
            </div>
            </div>


            <div class="form-group mx-3">


              <label class="card-title">Slight wear and tear normal sign of usage</label>
              <div class="card-body">
              <input type="checkbox" name="screen_distort">
            </div>
            </div>


            <div class="form-group mx-3">


              <label class="card-title">Moderate wear and tear scratches and loose hinges</label>
              <div class="card-body">
              <input type="checkbox" name="screen_distort">
            </div>
            </div>

            <div class="form-group mx-3">


              <label class="card-title">Serious wear and tear heavy dents and broken parts</label>
              <div class="card-body">
              <input type="checkbox" name="screen_distort">
            </div>
            </div>



          </div>



        </div>

        <div class="tab">
          <label>Age of laptop</label>

          <div class="form-group form-inline  ">


          <div class="form-check  mx-3 ">
        <input type="radio" class="form-check-input" id="materialUnchecked" name="materialExampleRadios">
        <label class="form-check-label" for="materialUnchecked">Less than 1 year(in warranty)</label>
        </div>

        <div class="form-check  mx-3">
        <input type="radio" class="form-check-input" id="materialUnchecked" name="materialExampleRadios">
        <label class="form-check-label" for="materialUnchecked">Between 1 to 3 years</label>
        </div>

        <div class="form-check  mx-3 "  >
        <input type="radio"  class="form-check-input" id="materialUnchecked" name="materialExampleRadios">
        <label class="form-check-label" for="materialUnchecked">More than 3 years</label>
        </div>
        </div>


        </div>

        <div style="overflow:auto;">
          <div style="float:right;">
            <button type="button" class="btn btn-primary" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
            <button type="button" class="btn btn-info" id="nextBtn" onclick="nextPrev(1)">Next</button>
          </div>
        </div>
        <!-- Circles which indicates the steps of the form: -->
        <div style="text-align:center;margin-top:40px;">
          <span class="step"></span>
          <span class="step"></span>
          <span class="step"></span>
          <span class="step"></span>
        </div>
      </form>
      </div>
      </div>
    </div>
    <div class="col-md-2">
      <div class="card">
      </div>
    </div>
  </div>
</div>


<script>
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}
</script>


@endsection
