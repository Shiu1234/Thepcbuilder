<?php

namespace App\Http\Controllers\Frontend;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Models\Order;
use App\Models\Models\Orderitem;
use App\Models\Models\Products;
use App\Mail\PlaceorderMailable;

class CheckoutController extends Controller
{
    //
    public function index(){

      $cookie_data = stripslashes(Cookie::get('shopping_cart'));
      $cart_data = json_decode($cookie_data, true);

      return view('frontend.checkout.index')->with('cart_data',$cart_data);
    }


private function update_user($user_id,$request){


  $user = User::find($user_id);
  $user->name = $request->input('fname');
    $user->lname = $request->input('lname');
      $user->phone = $request->input('phone');
        $user->alternate_phone = $request->input('altnumber');
          $user->address1 = $request->input('address1');
            $user->address2 = $request->input('address2');
              $user->city = $request->input('city');
                $user->state = $request->input('state');
                $user->pincode = $request->input('pincode');
                return $user->save();
}


  private function insert_orderitem($last_order_id)
  {
    $cookie_data = stripslashes(Cookie::get('shopping_cart'));
    $cart_data = json_decode($cookie_data, true);
    $items_in_cart = $cart_data;

    foreach($items_in_cart as $itemdata)

    {
      $products = Products::find($itemdata['item_id']);
      $price_value = $products->price;
      $tax_amt = $products->tax_amt;


      Orderitem::create([
        'order_id'=> $last_order_id,
        'product_id'=> $itemdata['item_id'],
        'price'=>$price_value,
        'tax_amt'=>$tax_amt,
        'quantity'=>$itemdata['item_quantity'],



      ]);

    }
  }

private function placeorderMailable($request){

  $order_data = [
            'first_name' => $request->input('fname'),
            'last_name' => $request->input('lname'),
            'email' => $request->input('email'),
            'phone_no' => $request->input('phone'),
            'alternate_phone' => $request->input('altnumber'),
            'address1' => $request->input('address1'),
            'address2' => $request->input('address2'),
            'city' => $request->input('city'),
            'state' => $request->input('state'),
            'pincode' => $request->input('pincode'),

        ];

          Cookie::queue(Cookie::forget('shopping_cart'));
          $items_in_cart = json_decode($cookie_data,true);

          $to_customer_email = $request->input('email');
        Mail::to($to_customer_email)->send(new PlaceorderMailable($order_data,$items_in_cart));
}

    public function storeorder(Request $request){
/*
payment status
0-Nothing paid
1-Cash Paid
2-Razorpay payment success
3-Razorpay payment failed


 */
      if(isset($_POST['place_order_btn']))
      {

        // return "I am here";
        // user data
        $user_id = Auth::id();
        $this->update_user($user_id,$request);


        // Payment status = 0(pending)  1- cash accepted 2-cancel  3-continue for online

//Placing order
        $trackno = rand(1111,9999);
        $order = new Order;
        // $user_id = Auth::id();
        $order->user_id = $user_id;
          $order->tracking_no = 'fabcart'.$trackno;
            $order->payment_mode = "Cash On Deleivery";
              $order->payment_id = "";
                $order->payment_status ="0";
                  $order->order_status = "0";
                    $order->notify = "0";
                    $order->save();

                    $last_order_id = $order->id;


        //ordered cart-items

        $this->insert_orderitem($last_order_id);
        //send mail

        Cookie::queue(Cookie::forget('shopping_cart'));
        return redirect('/thank-you')->with('status','Order has been created successfully');

      }

      if(isset($_POST['place_order_razorpay']))
      {
        $user_id = Auth::id();
        $this->update_user($user_id,$request);


        // Payment status = 0(pending)  1- cash accepted 2-cancel  3-continue for online

//Placing order
        $trackno = rand(1111,9999);
        $order = new Order;
        // $user_id = Auth::id();
        $order->user_id = $user_id;
          $order->tracking_no = 'fabcart'.$trackno;
            $order->payment_mode = "Payment by Razorpay";
              $order->payment_id = $request->input('razorpay_payment_id');
                $order->payment_status ="2";
                  $order->order_status = "0";
                    $order->notify = "0";
                    $order->save();

                    $last_order_id = $order->id;


        //ordered cart-items

        $this->insert_orderitem($last_order_id);
      }
    }

    public function checkamount(Request $request){

          if(Cookie::get('shopping_cart'))
          {
            $cookie_data = stripslashes(Cookie::get('shopping_cart'));
            $cart_data = json_decode($cookie_data, true);
            $items_in_cart = $cart_data;
            $total="0";
            foreach($items_in_cart as $itemdata)

            {
              $products = Products::find($itemdata['item_id']);
              $price_value = $products->price;
              $total= $total + ($itemdata['item_quantity'] * $price_value);
            }
            return response()->json([
              'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                  'phone' => $request->phone,
                    'alternate_phone' => $request->altnumber,
                    'address1' => $request->address1,
                    'address2' => $request->address2,
                      'city' => $request->city,
                          'state' => $request->state,
                          'pincode' => $request->pincode,
                          'email' => $request->email,
                          'total_price' =>$total
            ]);


          }

          else{

            return response()->json([
              'status_code' => 'no_data_in_cart',
              'status' => 'Your cart is empty',

            ]);
          }



    }
}
