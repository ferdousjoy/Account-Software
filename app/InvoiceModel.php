<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InvoiceModel extends Model
{
  protected $fillable=['chalan_name','po_number','customer','driver_name','shipping_address','driver_mobile','date','track_number','product','price','product','description','quantity','transport','ammount','labour_cost'];


  function cusinfo()
{
return $this->hasOne('App\CustomerModel','customer','id');
}
}
