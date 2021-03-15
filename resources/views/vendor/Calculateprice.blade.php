@extends('layouts.frontend')

@section('title')
Sell old Laptop
@endsection


@section('content')
<section>
<div class="container-fluid" style="margin-top:160px;">

<div class="row">
<div class="col-md-8" id="demo">
  <div class="card">
  <h3 class="card-title">Does The Laptop Switch On?</h3>
  <div class="card-body">
  <div class="form-check form-check-inline">
  <input onclick="loadDoc()" class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
  <label class="form-check-label" for="inlineRadio1">Yes</label>
</div>
<div class="form-check form-check-inline">
  <input onclick="loadDoc()" class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
  <label class="form-check-label" for="inlineRadio2">No</label>
</div>
</div>
</div>
</div>


<div class="col-md-4">
  <div class="card">
    <h4 class="card-header">
      Product
    </h4>
    <div class="card-body">
      <h5 class="card-text">Device Evaluation</h5>
    </div>
  </div>
</div>

</div>


</div>
</section>

<script>
function loadDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("demo").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "calculator", true);
  xhttp.send();
}
</script>

<script>
function loadDo() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("demo").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "addfeatures", true);
  xhttp.send();
}
</script>
@endsection
