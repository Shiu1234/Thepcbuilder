<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SellComputer;

class SellController extends Controller
{
  public function index()
  {

    $laptops=SellComputer::all();
    return view('vendor.sellcomputer')->with('laptops',$laptops);
  }
}

public function sellold(){



}
