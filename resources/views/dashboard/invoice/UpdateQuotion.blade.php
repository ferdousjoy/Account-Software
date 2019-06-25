@extends('layouts.dashboard')
@section('title','update quotion')
@section('content')
<style>

.form-container{
  padding:10px;
  padding-bottom:25px;
  margin:0 auto;
  margin-top:20px;
  width:100%;
  border-radius:20px;
  background-color: #ececec;
}

.add-one{
  color:green;
  text-align:center;
  font-weight:bolder;
  cursor:pointer;
  margin-top:10px;
}

.delete {
    color: white;
    background-color: rgb(231, 76, 60);
    text-align: center;
    font-weight: 700;
    border-radius: 50%;
    width: 20px;
    height:20px;
    cursor: pointer;
    border: 0;
    padding: 0;
    position: absolute;
    right:36px;
    top:calc(50% - 10px);
}
#invoicesTable th,
#invoicesTable td{vertical-align: middle;}
#singlebutton{
  width:100%;
  margin-top:20px;
}

.title{
  text-align:center;
  font-size:40px;
  margin-bottom:40px;
}

.dynamic-element{
  margin-bottom:0px;
}
.ivAmmountBox{position: relative;}
.ivAmmount{
  background: transparent;
    border: 0;
    text-align: center;
    min-width: 150px;
}
</style>
<!-- Horizontal navigation-->
@include('layouts.inc.success')
<div class="app-content content">
  <div class="content-wrapper">
    <div class="content-header row"></div>
    <div class="content-body">
      <div class="card">
        <div class="card-content">
          <div id="notify" class="alert alert-success" style="display:none;">
            <a href="#" class="close" data-dismiss="alert">&times;</a>
            <div class="message"></div>
          </div>

          <div class="card-body">
            <div class="row">
              <div class="col-sm-12">
                <div id="customerpanel" class="inner-cmp-pnl">
                    <form id="invoicesForm" method="post" action="{{Route('updatequotionform')}}" style="padding:30px;">
                          @csrf
                          <div class="form-group row">
                            <div class="frmSearch col-sm-12">
                              <h2>Update Quotation</h2>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-6">
                              <div class="input-group" style="margin-left:20px">
                                <label for="invocieno"  class="caption" style="transform: translateX(-17px);">Quotation No</label>
                                     <input type="hidden" name="pos_id" value="{{$pos[0]->id}}">
                                <textarea style="margin-bottom:17px; resize:none;
                                height: 41px; border: 1px solid #babfc7; padding: 10px; border-radius: 4px;" name="estimate" cols="10" rows="4">{{$pos[0]->estimate}}</textarea>

                              </div>
                            </div>
                          </div>
                          <hr>
                          <div class="row">

                            <div class="col-sm-12 cmp-pnl">
                              <div class="inner-cmp-pnl">
                                <div class="form-group row">
                                  <div class="col-sm-4">
                                    <div class="row">
                                      <div class="col-md-4">
                                        <label for="invocieno"  class="caption">Cutomer</label>
                                      </div>
                                      <div class="col-md-6">
                                        <select name="customer" class="selectpicker form-control">
                                          <option disable="disabled">--Choose one--</option>
                                          @foreach($customers as $cmr)
                                          <option value="{{$cmr->id}}"{{($cmr->id == $pos[0]->customer)?' selected':''}}>{{$cmr->customer}}</option>
                                          @endforeach
                                        </select>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-sm-4">
                                    <div class="row">
                                      <div class="col-md-4">
                                        <label for="invocieno" class="caption">Date</label>
                                      </div>
                                      <div class="col-md-6">
                                        <input type="date" class="form-control"  name="date" value="{{$pos[0]->date}}" data-toggle="datepicker" autocomplete="false">
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-sm-4">
                                    <div class="row">

                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="form-group row">
                                <div class="col-sm-4">
                                  <div class="row">
                                    <div class="col-md-4">
                                      <label for="invocieno"  class="caption">Currency</label>
                                    </div>
                                    <div class="col-md-6">
                                      <select name="currency" class="selectpicker form-control">
                                        @foreach(['BD','Indian','Doller'] as $currency)
                                        <option value="{{ $currency }}"{{($currency == $pos[0]->currency)?' selected':''}}>{{ $currency }}</option>
                                        @endforeach
                                      </select>
                                    </div>
                                  </div>
                                </div>

                                <div class="col-sm-4">
                                  <div class="row">
                                    <div class="col-md-4">
                                      <label for="invocieno"  class="caption">Expire Date</label>
                                    </div>
                                    <div class="col-md-6">
                                      <input type="date" class="form-control"  name="exdate" value="{{$pos[0]->exdate}}" data-toggle="datepicker" autocomplete="false">
                                    </div>
                                  </div>
                                </div>
                                  <div class="col-sm-4">
                                    <div class="row" style="margin-top:-61px;">
                                      <div class="col-md-4"><label for="invocieno" class="caption">Terms and Condition</label></div>
                                      <div class="col-md-6"><textarea class="form-control" name="memo" rows="4" style="resize:none"></textarea></div>
                                    </div>
                                  </div>
                              </div>
                            </div>
                          </div>


                          <div class="row">
                            <div class="col-md-12">

                              <table id="invoicesTable" class="table table-striped table-bordered  dataex-res-constructor">
                                <thead>
                                  <tr>
                                    <th>Product</th>
                                    <th>Description</th>
                                    <th>Quantity</th>
                                    <th>Unit</th>
                                    <th>Price</th>
                                    <th>Tax</th>
                                    <th>Amount</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <?php //$sum = 0.00; ?>
                                  @foreach($pos as $k=>$po)
                                  <tr>
                                    <td>
                                        <select name="product[]" class="form-control ivProduct">
                                          @foreach($products as $product)
                                          <option value="{{$product->name}}"{{ (strtolower(trim($product->name)) == strtolower(trim($po->product)))?' selected':'' }}>{{$product->name}}</option>
                                          @endforeach
                                        </select>
                                    </td>
                                    <td><textarea class="form-control ivDescription" name="description[]" style="resize:none;height:39px">{{ $po->description }}</textarea></td>
                                    <td><input type="text" class="form-control ivQuantity" name="quantity[]" value="{{ $po->quantity }}"></td>
                                    <td>
                                      <select class="form-control" name="unit[]" style="min-width:100px">
                                       @foreach($units as $unit)
                                       <option value="{{$unit->unit_name}}"{{ (strtolower(trim($unit->unit_name)) == strtolower(trim($po->unit)))?' selected':'' }}>{{$unit->unit_name}}</option>
                                       @endforeach
                                      </select>
                                    </td>
                                    <td><input type="text" class="form-control ivPrice"  name="price[]" value="{{ $po->price }}"></td>
                                    <td>
                                      <select class="form-control ivTax"  name="tax[]" value="0">
                                        <option value="0">No TAX</option>
                                    @foreach($taxs as $tax)
                                      <option value="{{$tax->percentage}}">{{$tax->tax}}</option>
                                    @endforeach
                                      </select>
                                    </td>
                                    <td class="ivAmmountBox">
                                      <input type="text" class="form-control ivAmmount" value="{{ (!empty($po->total))?$po->total:'0.00' }}" readonly>
                                      @if($k>0)
                                      <button type="button" class="delete">×</button>
                                      @endif
                                    </td>
                                  </tr>
                                  <?php //$sum += $po->total; ?>
                                  @endforeach

                                </tbody>

                                <tfoot>
                                  <tr>
                                    <td colspan="7">
                                      <button type="button" id="add_one" class="btn btn-success btn-block">+ Add More</button>
                                    </td>
                                  </tr>
                                </tfoot>
                              </table>

                              <div class="dynamic-stuff"></div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12 text-center" style="padding-bottom:20px;">
                              <input style="border-radious:30px;margin-botom:20px;"  type="submit" class="btn btn-primary sub-btn" value="Save" data-loading-text="Creating...">
                              <input style="border-radious:30px;margin-botom:20px;"  type="submit" class="btn btn-primary sub-btn" value="Send" data-loading-text="Creating...">
                            </div>
                          </div>
                    </form>

                    @if(false)
                      <div class="form-group dynamic-element" style="display:none">
                        <div class="row" style="padding-left:45px;">
                            <!-- Replace these fields -->
                            <div class="col-md-2">
                              <label  class="dynamic_head">Product</label>
                              <select  id="productuu" name="profesor[]" class="form-control">
                                @foreach($product as $key)
                                <option value="{{$key->name}}">{{$key->name}}</option>
                                @endforeach
                              </select>
                            </div>
                            <div class="col-md-2">
                              <label  class="dynamic_head">Description</label>
                              <textarea class="form-control" id="dess" name="description" style="resize:none; height:39px"></textarea>
                            </div>
                            <div class="col-md-2">
                              <label  class="dynamic_head">Quantity</label>
                              <input type="text" class="form-control" id="amount-0"  name="quantity">
                            </div>
                            <div class="col-md-2">
                              <label  class="dynamic_head">Unit</label>
                              <input type="text" class="form-control" id="amount-0"  name="quantity">
                            </div>
                            <div class="col-md-2">
                              <label  class="dynamic_head">Price</label>
                              <input type="text" class="form-control"  name="price" id="price-0">
                            </div>
                            <div class="col-md-2">
                              <label  class="dynamic_head">Tax</label>
                              <input type="text" class="form-control"  name="price" id="price-0">
                            </div>
                            <div class="col-md-2">
                              <label  class="dynamic_head">Amount</label><br>
                              <textarea style="width:100px; height:39px;resize:none; border-radius:5px"></textarea>
                            </div>
                            <!-- End of fields-->
                            <div class="col-md-1 delete-holder">
                            <p class="delete">x</p>
                          </div>
                        </div>
                      </div>
                    @endif


                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
</div>
@endsection
@section('footer_scripts')


<script type="text/javascript">

$(function(){
  $form = $('#invoicesForm');
  $table = $form.find('#invoicesTable');
  $tbody = $table.find('tbody');

  $(function(){
    //Clone the hidden element and shows it
    $form.on('click','#add_one',function(){

      $tr = $tbody.find('tr:first-child').clone();
      //$tr.find('.ivProduct').html('');
      $tr.find('.ivDescription').html('');
      $tr.find('.ivQuantity').val(0);
      $tr.find('.ivPrice').val(0);
      $tr.find('.ivAmmount').val(0);
      $tr.find('td:last-child').append('<button type="button" class="delete">&times;</button>');
      $tr.appendTo( $tbody );

    });

    $form.on('click','.delete',function(){
      $(this).parents('tr').remove();
    });


  });

  $(function(){
    $form.on('change','.ivProduct',function() {
      var country_id = $(this).val();
      var $tr = $(this).parents('tr');
      $.ajax({
          headers:{'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
          type:'POST',
          url:'/getajaxproduct',
          data:{country_id: country_id},
          success: function (data) {
            $data = JSON.parse(data);
            $tr.find('.ivDescription').html($data.description);
            $tr.find('.ivPrice').val($data.price);
          }
      });
    });
  });


  $(function(){
    $form.on('keyup','.ivQuantity,.ivPrice',function(){
        $tr = $(this).parents('tr');

        var price = parseInt($tr.find('.ivPrice').val());
        var qty = parseInt($tr.find('.ivQuantity').val());
        //var vat = parseInt($('#vat-0').val());
        $tr.find('.ivAmmount').val(price*qty);
        //$('#ivAmmount').val((price*amount) + vat);


    });



  });
  $form.on('change','.ivTax',function(){
  $tr = $(this).parents('tr');

  var price = parseInt($tr.find('.ivPrice').val());
  var qty = parseInt($tr.find('.ivQuantity').val());
  var tax = parseInt($tr.find('.ivTax').val());
  var totaltax =parseInt(price*qty*tax/100);
  $tr.find('.ivAmmount').val(price*qty + totaltax);
});



});




</script>
@endsection
