$(document).ready(function(){

$.ajaxSetup({
  headers:{

    'X-CSRF_TOKEN':$('meta[name="csrf_field"]').attr('content')
  }



});

  $('.razor-pay-btn').click(function(e){
    e.preventDefault();
    var data = {
      '_token': $('input[name=_token]').val(),
      'first_name': $('input[name=fname]').val(),
      'last_name': $('input[name=lname]').val(),
      'phone': $('input[name=phone]').val(),
      'altnumber': $('input[name=altnumber]').val(),
      'address1': $('input[name=address1]').val(),
      'address2': $('input[name=address2]').val(),
      'city': $('input[name=city]').val(),
      'state': $('input[name=state]').val(),
      'pincode': $('input[name=pincode]').val()

    }

    $.ajax({
      type:"POST",
      url:"/confirm-razorpay-payment",
      data:data,

      success: function(response){
        if(response.status_code == 'no_data_in_cart'){
          window.location.href='/cart'
        }
        else{
          // console.log(response.total_price);

          var options = {
    "key": "rzp_test", // Enter the Key ID generated from the Dashboard
    "amount": (response.total_price * 100),
    "name": "ThePcBuilder",
    "description": "Thank You For Purchasing",
    "image": "https://localhost:8080/img/brands/logo.png",
    "order_id": "order_9A33XWu170gUtm", //This is a sample Order ID. Pass the `id` obtained in the response of Step 1
    "handler": function (razorpay_response){

      $.ajax({
        type:"POST",
        url:"/place-order",
        data:{
          'razorpay_payment_id':razorpay_response.razorpay_payment_id,
          'fname' : response.first_name,
            'lname' : response.last_name,
              'phone' : response.phone,
                'altnumber' : response.altnumber,
                'address1' : response.address1,
                'address2' : response.address2,
                  'city' : response.city,
                      'state' : response.state,
                      'pincode' : response.pincode,
                      'email' : response.email,
                      'place_order_razorpay':true,
        },
        success: function(response){

            window.location.href="/thank-you";
          }

      })
        alert(razorpay_response.razorpay_payment_id);



    },
    "prefill": {
        "name": response.first_name + response.last_name,
        "contact": response.phone,
        "email": response.email
    },
    "theme": {
        "color": "#528FF0"
    }
};
var rzp1 = new Razorpay(options);
    rzp1.open();
    e.preventDefault();
        }

      }

    });

  });
});
