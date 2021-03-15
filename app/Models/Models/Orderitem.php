<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orderitem extends Model
{
  protected $table ='orders';
  protected $fillable =[

  'order_id',
  'product_id',
  'price',
  'tax_amt',
  'quantity',


];
}
