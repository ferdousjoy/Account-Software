<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CustomerModel;
use App\WarehouseModel;
use App\InvoiceModel;
use App\CompanySettingModel;
use App\ProductModel;
use App\UnitModel;
use App\TaxModel;
use App\CashModel;
use App\QuoteModel;
use App\AccountModel;
use App\PosModel;
use App\ExpenseModel;
use PDF;
use Carbon\Carbon;
class InvoiceController extends Controller
{

  function updatechallan2(Request $req){
    InvoiceModel::findOrFail($req->product_id)->update([
      'chalan_name'=>$req['chalan_name'],
      'po_number'=>$req['po_number'],
      'customer'=>$req['customer'],
      'driver_name'=>$req['drivername'],
      'shipping_address'=>$req['shippingaddress'],
      'driver_mobile'=>$req['drivermobile'],
      'date'=>$req['date'],
      'track_number'=>$req['tracknumber'],
      'product'=>$req['product'],
      'description'=>$req['description'],
      'quantity'=>$req['quantity'],
      'price'=>$req['price'],
      'transport'=>$req['transport'],
      'ammount'=>$req['total'],
  ]);
      return redirect('invoices');
  }
     //newinvoice
     public function invoices(){
         $invoices=InvoiceModel::orderBy('id')->get();
         $no=1;
        return view('dashboard.invoice.invoices',compact('invoices','no'));
    }

     public function viewinvoice($id){
         $in=InvoiceModel::all();
         $iv=CustomerModel::all();
         $pro=ProductModel::all();
         $unit=UnitModel::all();
        return view('dashboard.invoice.viewinvoice',compact('iv','in','pro','unit'));
        echo "string";
    }
     public function viewchalan($id){
   $in=InvoiceModel::find($id);
         $iv=CustomerModel::find($id);
         $pro=ProductModel::find($id);
         $unit=UnitModel::find($id);

        return view('dashboard.invoice.viewchalan',compact('iv','in','pro','unit'));

    }
     //newinvoice
     public function newinvoice(){
         $warehouses=WarehouseModel::orderBy('id')->get();
         $qoute=QuoteModel::all();
         $cus=CustomerModel::all();
         $challan_number=InvoiceModel::latest()->first()->chalan_name;
         $product=ProductModel::all();
         $unit=UnitModel::all();
        return view('dashboard.invoice.newinvoice',compact('warehouses','qoute','cus','challan_number','product','unit'));
    }
     //editinvoice
    //  public function editinvoice($id){
    //     $warehouses=WarehouseModel::orderBy('id')->get();
    //     $qoute=QuoteModel::all();
    //     $cus=CustomerModel::all();
    //     $challan_number=InvoiceModel::findOrFail($id);;
    //     $product=ProductModel::all();
    //     $unit=UnitModel::all();
    // return view('dashboard.invoice.editinvoice',compact('warehouses','qoute','cus','challan_number','product','unit'));

    //}


    function challanedit($product_id){
 $challan_number=InvoiceModel::findOrFail($product_id);
 $qoute=QuoteModel::all();
 $cus=CustomerModel::all();
 $product=ProductModel::all();
 $unit=UnitModel::all();
return view('dashboard.invoice.editinvoice',compact('qoute','cus','product','unit','challan_number'));
}






     public function editinvoiceform(Request $req){
        InvoiceModel::find($req['id'])->update(
            [
                'billing_name'=>$req['billing_name'],
                'billing_address'=>$req['billing_address'],
                'billing_phone'=>'billing_phone',
                'billing_email'=>$req['billing_email'],
                'billing_warehouse'=>$req['warehouse'],
                'billing_invoice_no'=>$req['invocienomber'],
                'billing_reference'=>$req['refer'],
                'billing_date'=>$req['invoicedate'],
                'billing_next_payment'=>$req['nextpayment'],
                'billing_tax'=>$req['tax'],
                'billing_discount'=>$req['discount'],
                'billing_note'=>$req['notes'],
                'billing_description'=>$req['product_description'],
                'product_name'=>$req['product_name'],
                'product_quantity'=>$req['product_qty'],
                'product_price'=>$req['total'],
                'payment_terms'=>$req['pterms'],
                'payment_status'=>$req['status'],
                'payment_currency'=>$req['mcurrency'],
                'created_at'=>Carbon::now(),
            ]);
            session()->flash('success' , 'Invoice Updated succesfully Updated');
        return back();
    }
     //deleteinvoice
     public function deleteinvoice($id){
       InvoiceModel::find($id)->delete();
        session()->flash('success' , 'Invoice succesfully Deleted');
        return back();
    }
     //newinvoice form
     public function newinvoiceform(Request $req){
       $req->validate([
   'chalan_name' => 'required|integer',

]);
        // $this->validate($req,[
        //     'name'=>'required',
        //     'po_number'=>'required',
        //     'customer'=>'required',
        //     'drivername'=>'required',
        //     'shippingaddress'=>'required',
        //     'drivermobile'=>'required',
        //     'date'=>'required',
        //     'tracknumber'=>'required',
        //     'product'=>'required',
        //     'description'=>'required',
        //     'quantity'=>'required',
        //     'price'=>'required',
        //     'transport'=>'required',
        //     'labour_cost'=>'required',
        //
        //    ]);


        InvoiceModel::insert(
            [
              'chalan_name'=>$req['chalan_name'],
              'po_number'=>$req['po_number'],
              'customer'=>$req['customer'],
              'driver_name'=>$req['drivername'],
              'shipping_address'=>$req['shippingaddress'],
              'driver_mobile'=>$req['drivermobile'],
              'date'=>$req['date'],
              'track_number'=>$req['tracknumber'],
              'product'=>$req['product'],
              'description'=>$req['description'],
              'quantity'=>$req['quantity'],
              'price'=>$req['price'],
              'transport'=>$req['transport'],
              'ammount'=>$req['total'],
              'created_at'=>Carbon::now(),
            ]);
            session()->flash('success' , 'Chalan  succesfully Created');
            return back();
    }


    function updatechallan(Request $req){
   InvoiceModel::findOrFail($req->challan_id)->update([
     'chalan_name'=>$req['chalan_name'],
     'po_number'=>$req['po_number'],
     'customer'=>$req['customer'],
     'driver_name'=>$req['drivername'],
     'shipping_address'=>$req['shippingaddress'],
     'driver_mobile'=>$req['drivermobile'],
     'date'=>$req['date'],
     'track_number'=>$req['tracknumber'],
     'product'=>$req['product'],
     'description'=>$req['description'],
     'quantity'=>$req['quantity'],
     'price'=>$req['price'],
     'transport'=>$req['transport'],
     'ammount'=>$req['total'],
 ]);
 return back();
}
     //Searchchalan_name
    public function search(Request $req){
            $warehouses=WarehouseModel::orderBy('id')->get();
             $search=$req['search'];
              $posts=CustomerModel::where('billing_name','like', '%' .$search. '%')->orWhere('billing_email','like', '%' .$search. '%')->orWhere('billing_phone','like', '%' .$search. '%')->get();
              return view('dashboard.invoice.newinvoice',compact('posts','warehouses'));
        }
        //pos_invoices
        public function pos_invoices(){
            $invoices=PosModel::all()->unique('estimate');
            $no=1;
            return view('dashboard.invoice.pos_invoices',compact('invoices','no'));
        }

        function productdelete($product_id){
         QuoteModel::find($product_id)->delete();
         return back()->with('successdelte','Product delete Successfully');
        }



        public function updatequotion($id){
          $q = PosModel::find($id);
          $customers=CustomerModel::all();
          $products=ProductModel::all();
          $units=UnitModel::all();
          $taxs=TaxModel::all();
          $pos=PosModel::where('estimate',$q->estimate)->get();

          //dd($q);
          return view('dashboard.invoice.UpdateQuotion',compact('customers','products','pos','units','taxs'));

        }
        //pos_invoicescreate
        public function pos_invoicescreate(){
            $customer=CustomerModel::all();
            $productmodel=ProductModel::all();
            $unit=UnitModel::all();
            $tax=TaxModel::all();
            $pos=PosModel::all()->last()->estimate;
            return view('dashboard.invoice.pos_invoicescreate',compact('customer','productmodel','pos','unit','tax'));
        }
             //Search customer
    public function searchcustomerpos(Request $req){
         $search=$req['search'];
         $products=ProductModel::orderBy('id')->paginate('10');
          $posts=CustomerModel::where('billing_name','like', '%' .$search. '%')->orWhere('billing_email','like', '%' .$search. '%')->orWhere('billing_phone','like', '%' .$search. '%')->get();
          return view('dashboard.invoice.pos_invoicescreate',compact('posts','products'));
    }
     //newinvoice form
     public function pos_invoicescreateform(Request $req){
       $req->validate([
          'estimate' => 'required|integer',

      ]);
           $i = 0;
            foreach($req->product as $ss){

              PosModel::insert(
               [
                   'estimate'=>$req['estimate'],
                   'customer'=>$req['customer'],
                   'date'=>$req['date'],
                   'currency'=>$req['currency'],
                   'exdate'=>$req['exdate'],
                   'memo'=>$req['memo'],
                   'product'=>$req['product'][$i],
                   'description'=>$req['description'][$i],
                   'quantity'=>$req['quantity'][$i],
                   'price'=>$req['price'][$i],
                   'unit'=>$req['unit'][$i],
                   'tax'=>$req['tax'][$i],
                   'created_at'=>Carbon::now(),
               ]);

               $i=$i+1;

            }

            session()->flash('success' , 'POS  succesfully Created');
            return back();
    }
    public function updatequotionform(Request $req){

          $i = 0;
           foreach($req->product as $ss){

             PosModel::findOrFail($req->pos_id)->update(
              [
                  'estimate'=>$req['estimate'],
                  'customer'=>$req['customer'],
                  'date'=>$req['date'],
                  'currency'=>$req['currency'],
                  'exdate'=>$req['exdate'],
                  'memo'=>$req['memo'],
                  'product'=>$req['product'][$i],
                  'description'=>$req['description'][$i],
                  'quantity'=>$req['quantity'][$i],
                  'price'=>$req['price'][$i],
                  'unit'=>$req['unit'][$i],
                  'tax'=>$req['tax'][$i],
                  'created_at'=>Carbon::now(),
              ]);

              $i=$i+1;

           }

           session()->flash('success' , 'Quotation succesfully Created');
           return back();
   }
         //invoice View
         public function viewposinvoices($id){
            $invoice=PosModel::find($id);
            $account=AccountModel::orderBy('id')->get();
            $company=CompanySettingModel::find('1');
           return view('dashboard.invoice.viewpos',compact('invoice','company','account'));
       }
         //deleteinvoice
         public function deleteposinvoices($id){
            PosModel::find($id)->delete();
             session()->flash('success' , 'Pos Invoice succesfully Deleted');
             return back();
         }

         public function deleteposinvoices22($id){
            CashModel::find($id)->delete();
             session()->flash('success' , 'Pos Invoice succesfully Deleted');
             return back();

         }
         public function deleteposinvoices222($id){
            ExpenseModel::find($id)->delete();
             session()->flash('success' , 'Pos Invoice succesfully Deleted');
             return back();

         }
         public function deleteposinvoices2($id){
            QuoteModel::find($id)->delete();
             session()->flash('success' , 'Pos Invoice succesfully Deleted');
             return back();
         }
         public function print($id){
            $company=CompanySettingModel::find('1');
            $invoice ['invoice']= $invoice=InvoiceModel::find($id);
           $pdf = PDF::loadView('pdf', $invoice);
          return $pdf->stream('pdf',array("Attachment" => false));

       }
}
