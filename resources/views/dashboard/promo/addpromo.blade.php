@extends('layouts.dashboard')
@section('content')
<!-- Horizontal navigation-->
@include('layouts.inc.success')
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body"><div class="content-body">
    <div class="card">
        <div class="card-header">
            <h5>Add Promo</h5>
            <hr>
            <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
            <div class="heading-elements">
                <ul class="list-inline mb-0">
                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                    <li><a data-action="close"><i class="ft-x"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="card-content">
            <div id="notify" class="alert alert-success" style="display:none;">
                <a href="#" class="close" data-dismiss="alert">&times;</a>

                <div class="message"></div>
            </div>
            <div class="card-body">


                <form method="post" class="form-horizontal" action="{{Route('add_promo_form')}}">
                    @csrf

                    <div class="form-group row">

                        <label class="col-sm-2 col-form-label"
                               for="code">Code</label>

                        <div class="col-sm-4">
                            <input type="text" placeholder="Code"  class="form-control margin-bottom  required" name="code" value="OTIWAYKW">
                        </div>
                    </div>
                    <div class="form-group row">

                        <label class="col-sm-2 col-form-label"
                               for="amount">Amount</label>

                        <div class="col-sm-4">
                            <input type="number" placeholder="Amount"
                                   class="form-control margin-bottom  required" name="amount" value="0">
                        </div>
                    </div>

                    <div class="form-group row">

                        <label class="col-sm-2 col-form-label" for="qty">Qty</label>

                        <div class="col-sm-2">
                            <input type="number" placeholder="Amount"
                                   class="form-control margin-bottom  required" name="qty" value="1">
                        </div>
                    </div>

                    <div class="form-group row">

                        <label class="col-sm-2 control-label"
                               for="valid">Valid</label>

                        <div class="col-sm-2">
                            <input type="date" class="form-control required"
                                   placeholder="Start Date" name="valid"
                                   data-toggle="datepicker" autocomplete="false">
                        </div>
                    </div>
                    <div class="form-group row"><label class="col-sm-2 col-form-label"
                                                       for="link_ac">Link to account</label>
                        <div class="col-sm-6">
                            <fieldset>
                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" name="link_ac" id="customRadio1"
                                           value="yes" checked="">
                                    <label class="custom-control-label"
                                           for="customRadio1">Yes &nbsp;</label>
                                </div>
                            </fieldset>
                            <fieldset>
                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" name="link_ac" id="customRadio2"
                                           value="no">
                                    <label class="custom-control-label"
                                           for="customRadio2">No</label>
                                </div>
                            </fieldset>
                        </div>
                    </div>

                    <div class="form-group row">

                        <label class="col-sm-2 col-form-label"
                               for="pay_acc">Account</label>

                        <div class="col-sm-4">
                            <select name="pay_acc" class="form-control">

                                @foreach($accounts as $account)

                            <option value="{{$account->account_no}}">{{$account->account_no}}</option>
                                @endforeach                   
                                
                           </select>
                        </div>
                    </div>


                    <div class="form-group row">

                        <label class="col-sm-2 control-label"
                               for="note">Note</label>

                        <div class="col-sm-8">
                            <input type="text" placeholder="Short Note"
                                   class="form-control margin-bottom" name="note">
                        </div>
                    </div>

                    <div class="form-group row">

                        <label class="col-sm-2 col-form-label"></label>

                        <div class="col-sm-4">
                            <input type="submit" class="btn btn-success margin-bottom"
                                   value="Add" data-loading-text="Adding...">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div></div>
</div>
</div>
@endsection