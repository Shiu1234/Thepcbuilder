<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
  protected $table ='order_items';
protected $fillable =[

'user_id',
'tracking_no',
'tracking_msg',
'payment_mode',
'payment_id',
'payment_status',
'order_status',
'cancel_reason',
'notify',






];
}
