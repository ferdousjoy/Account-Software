<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class QuoteModel extends Model
{

    use SoftDeletes;
    protected $fillable = [
       'purchase_order','country_id','purchase_date','currency','exdate','notes','product','description','quantity','price','total'
   ];
    protected $guarded = [];
     function get_product_info()
  {
   return $this->hasOne('App\CustomerModel','id','vendor');
  }

}
