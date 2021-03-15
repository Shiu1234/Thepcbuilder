<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Models\Contactus;

class ContactusController extends Controller
{
    public function index(){
      return view('frontend.contactus');
    }

    public function submitform(Request $request){

      $contact = new Contactus();
      $contact->name = $request->input('fname');
        $contact->lname = $request->input('lname');
        $contact->phone = $request->input('phone');
          $contact->alternate_phone = $request->input('altnumber');
          $contact->address1 = $request->input('address1');
            $contact->address2 = $request->input('address2');
            $contact->city = $request->input('city');
              $contact->state = $request->input('state');
              $contact->pincode = $request->input('pincode');
                $contact->email = $request->input('email');
                $contact->password = $request->input('password');
          $contact->save();
          return redirect()->back();
    }
}
