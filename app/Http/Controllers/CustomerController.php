<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CustomerModel;
use App\Country;
use App\City;
use App\ClientModel;
use Session\Session;
use Carbon\Carbon;
class CustomerController extends Controller
{

public function updatecustomer(Request $req)
{
CustomerModel::findOrFail($req->product_id)->update([
  'customer'=>$req['customer'],
  'email'=>$req['email'],
  'phone'=>$req['phone'],
  'contact'=>$req['contact'],

  'contact2'=>$req['contact2'],
  'currency'=>$req['currency'],
  'BL_Ad'=>$req['BL_Ad'],
  'BL_Ad2'=>$req['BL_Ad2'],

  'BL_Ad33'=>$req['BL_Ad33'],
  'BL_Ad222'=>$req['BL_Ad222'],
  'city'=>$req['city'],
  'zpo'=>$req['zpo'],

  'country'=>$req['country'],
  'state'=>$req['state'],
  'state2'=>$req['state2'],
  'contact2'=>$req['contact2'],

   'city3'=>$req['city3'],
   'zpo3'=>$req['zpo3'],
   'phone3'=>$req['phone3'],
   'note'=>$req['note'],

   'country3'=>$req['country3'],
   'state3'=>$req['state3'],
   'BL_Ad4'=>$req['BL_Ad4'],
   'BL_Ad5'=>$req['BL_Ad5'],

   'city5'=>$req['city5'],
    'zpo4'=>$req['zpo4'],
    'phone4'=>$req['phone4'],
    'note2'=>$req['note2'],

     'country6'=>$req['country6'],
     'country2'=>$req['country2'],
     'state6'=>$req['state6'],
    'BL_Ad9'=>$req['BL_Ad9'],
     'phone11'=>$req['phone11'],

     'phone12'=>$req['phone12'],
       'zpo11'=>$req['zpo11'],

       'note3'=>$req['note3'],
       'Bilingadres2'=>$req['Bilingadres2'],
       'contact_ship'=>$req['contact_ship'],
       'contact_ship2'=>$req['contact_ship2'],
 ]);
 session()->flash('success' , 'Customer succesfully Added');
 return back();
}


        //viewcustomer
        public function viewcustomer($id){
            $customerview=CustomerModel::find($id);
            return view('dashboard.customer.viewcustomer',compact('customerview'));
        }
        //viewcustomer
        public function editcustomer($id){
            $customeredit=CustomerModel::find($id);
            $country=Country::all();
            return view('dashboard.customer.editcustomer',compact('customeredit','country'));
        }
        //Edit Customer Form
        public function editcustomerform(Request $req){
            CustomerModel::find($_POST['id'])->update([
                'billing_name'=>$req['name'],
                'billing_email'=>$req['email'],
                'billing_phone'=>$req['phone'],
                'billing_address'=>$req['address'],
                'billing_city'=>$req['city'],
                'billing_region'=>$req['region'],
                'billing_country'=>$req['country'],
                'billing_post'=>$req['postbox'],
                'billing_company'=>$req['company'],
                'shipping_name'=>$req['name_s'],
                'shipping_email'=>$req['email_s'],
                'shipping_phone'=>$req['phone_s'],
                'shipping_address'=>$req['address_s'],
                'shipping_city'=>$req['city_s'],
                'shipping_region'=>$req['region_s'],
                'shipping_country'=>$req['country_s'],
                'shipping_post'=>$req['postbox_s'],
                'discount'=>$req['discount'],
                'document_id'=>$req['docid'],
                'tax_id'=>$req['taxid'],
                'extra'=>$req['c_field'],
                'group'=>$req['customergroup'],
                'language'=>$req['language'],
                'created_at'=>Carbon::now(),
            ]);
            session()->flash('success' , 'Customer succesfully Updated');
            return back();

        }
        //Delete customer
        public function deletecustomer($id){
              CustomerModel::findOrFail($id)->delete();
             session()->flash('success' , 'Customer succesfully Deleted');
            return back();
        }
            //Create Customer
    public function createcustomer(){
        $country=Country::all();
        return view('dashboard.customer.createcustomer',compact('country'));
    }
        //Create Customer
    public function createcustomerform(Request $req){
        // $this->validate($req,[
        //     'customername'=>'required',
        //     'customeremail'=>'required',
        //     'customerphone'=>'required|integer',
        //     'customeraddress'=>'required',
        //     'currency'=>'required',
        //     'billingaddress'=>'required',
        //     'billingaddress2'=>'required',
        //     'billingcity'=>'required',
        //     'billingpostbox'=>'required',
        //     'billingcountry'=>'required',
        //     'shipping_attention'=>'required',
        //      'shippingcountry'=>'required',
        //     'shippingaddress_s'=>'required',
        //     'shippingaddress_s2'=>'required',
        //     'city_s'=>'required',
        //     'city_s2'=>'required',
        //     'postbox_s'=>'required',
        //     'postbox_s2'=>'required',
        //     'shippingphone'=>'required',
        //     'shippingphone2'=>'required',
        //     'delivery'=>'required',
        //     'shippingstate2'=>'required',
        //     'shippingaddress_s3'=>'required',
        //     'shippingaddress_s4'=>'required',
        //     'bankname'=>'required',
        //     'bankaccount'=>'required',
        //     'delivery2'=>'required',

        //   ]);

            CustomerModel::insert([
                'customer'=>$req['customer'],
                'email'=>$req['email'],
                'phone'=>$req['phone'],
                'contact'=>$req['contact'],

                'contact2'=>$req['contact2'],
                'currency'=>$req['currency'],
                'BL_Ad'=>$req['BL_Ad'],
                'BL_Ad2'=>$req['BL_Ad2'],

                'BL_Ad33'=>$req['BL_Ad33'],
                'BL_Ad222'=>$req['BL_Ad222'],
                'city'=>$req['city'],
                'zpo'=>$req['zpo'],

                'country'=>$req['country'],
                'state'=>$req['state'],
                'state2'=>$req['state2'],
                'contact2'=>$req['contact2'],

                 'city3'=>$req['city3'],
                 'zpo3'=>$req['zpo3'],
                 'phone3'=>$req['phone3'],
                 'note'=>$req['note'],

                 'country3'=>$req['country3'],
                 'state3'=>$req['state3'],
                 'BL_Ad4'=>$req['BL_Ad4'],
                 'BL_Ad5'=>$req['BL_Ad5'],

                 'city5'=>$req['city5'],
                  'zpo4'=>$req['zpo4'],
                  'phone4'=>$req['phone4'],
                  'note2'=>$req['note2'],

                   'country6'=>$req['country6'],
                   'country2'=>$req['country2'],
                   'state6'=>$req['state6'],
                  'BL_Ad9'=>$req['BL_Ad9'],
                   'phone11'=>$req['phone11'],

                   'phone12'=>$req['phone12'],
                     'zpo11'=>$req['zpo11'],

                     'note3'=>$req['note3'],
                     'Bilingadres2'=>$req['Bilingadres2'],
                     'contact_ship'=>$req['contact_ship'],
                     'contact_ship2'=>$req['contact_ship2'],


                'created_at'=>Carbon::now(),
            ]);
            session()->flash('success' , 'Customer succesfully Added');
            return back();
        }



        //customer
        public function customer(){
            return view('dashboard.customer.customer');
        }
        //customers
        public function customers(){
            $no=1;
            $customers=CustomerModel::orderBy('id','DESC')->get();
            return view('dashboard.customer.customers',compact('customers','no'));
        }
            //cutomerstatement
    public function customerstatement(){
        return view('dashboard.customer.customerstatement');
    }
            //cutomerstatement
    public function customerreport(){
        return view('dashboard.report.customerreport');
    }
}
