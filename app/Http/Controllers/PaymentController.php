<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers;
use App\Billing;
use App\Cart;
use App\Listing;
use App\Mail\OrderShipped;
use App\Package;
use App\Product;
use App\Sale;
use App\Shipping;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;
/** All Paypal Details class **/
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\PaymentExecution;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Transaction;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Exception\PayPalConfigurationException;
use PayPal\Exception\PayPalConnectionException;
use PayPal\Rest\ApiContext;
use Redirect;
use Session;
use URL;

//Stripe
use Stripe;



class PaymentController extends Controller
{
    private $_api_context;

    public function __construct()
    {/** PayPal api context **/
        $paypal_conf = \Config::get('paypal');
        $this->_api_context = new ApiContext(new OAuthTokenCredential(
                $paypal_conf['client_id'],
                $paypal_conf['secret'])
        );
        $this->_api_context->setConfig($paypal_conf['settings']);
    }

    public function Payment(Request $request){
        return back()->with('message','This Fetcher is Turned of For Security Reason');
      $auth = Auth::user()->id;
         $mac = exec('getmac');
         $mac = strtok($mac, ' ');
         $carts = Cart::where('device', $mac)->with('product')->get();
         $grand_total = $request->session()->get('grand_total');

        //  Cash On Delivery
         if($request->payment == '1'){
             return "CASH";
         }
            ////////////////////////
            ///////Paypal Code ////
            //////////////////////
         elseif($request->payment == '2'){
//             session([
//                 'first_name' => $request->first_name,
//                 'last_name' => $request->last_name,
//                 'email' => $request->email,
//                 'phone' => $request->phone,
//             ]);
//             $package_id = $request->session()->get('package_id');
//             $listing_id = $request->session()->get('listing_id');
//             $payment_price = Package::findOrFail($package_id)->package_price;
//             $listing = Listing::findOrFail($listing_id)->business_name;
//             $payer = new Payer();
//             $payer->setPaymentMethod('paypal');
//             $item_1 = new Item();
//             $item_1->setName($listing) /** item name **/
//             ->setCurrency('USD')
//                 ->setQuantity(1)
//                 ->setPrice($payment_price); /** unit price **/
//             $item_list = new ItemList();
//             $item_list->setItems(array($item_1));
//             $amount = new Amount();
//             $amount->setCurrency('USD')
//                 ->setTotal($payment_price);
//             $transaction = new Transaction();
//             $transaction->setAmount($amount)
//                 ->setItemList($item_list)
//                 ->setDescription('Your transaction description');
//             $redirect_urls = new RedirectUrls();
//             $redirect_urls->setReturnUrl(URL::route('status')) /** Specify return URL **/
//             ->setCancelUrl(URL::route('status'));
//             $payment = new Payment();
//             $payment->setIntent('Sale')
//                 ->setPayer($payer)
//                 ->setRedirectUrls($redirect_urls)
//                 ->setTransactions(array($transaction));
//             /** dd($payment->create($this->_api_context));exit; **/
//             try {
//                 $payment->create($this->_api_context);
//             } catch (PayPal\Exception\PPConnectionException $ex) {
//                 if (\Config::get('app.debug')) {
//
//                     \Session::put('error', 'Connection timeout');
//                     return back();
//
//                 } else {
//                     \Session::put('error', 'Some error occur, sorry for inconvenient');
//                     return back();
//                 }
//             }
//             foreach ($payment->getLinks() as $link) {
//                 if ($link->getRel() == 'approval_url') {
//                     $redirect_url = $link->getHref();
//                     break;
//                 }
//             }
//             /** add payment ID to session **/
//             Session::put('paypal_payment_id', $payment->getId());
//                if (isset($redirect_url)) {
//                     /** redirect to paypal **/
//                     $shipping_id = Shipping::insertGetId([
//                         'user_id' =>$auth,
//                         'name' =>$request->name,
//                         'email' =>$request->email,
//                         'mobile' =>$request->mobile,
//                         'address' =>$request->address,
//                         'country_id' =>$request->country_id,
//                         'state_id' =>$request->state_id,
//                         'city_id' =>$request->city_id,
//                         'created_at' =>Carbon::now(),
//                     ]);
//                     $sale_id = Sale::insertGetId([
//                         'user_id'=>$auth,
//                         'shipping_id'=>$shipping_id,
//                         'grand_total'=>$grand_total,
//                         'created_at'=>Carbon::now(),
//                     ]);
//                     foreach($carts as $item){
//                         $bill_id = Billing::insertGetId([
//                             'user_id'=>$auth,
//                             'shipping_id'=>$shipping_id,
//                             'sale_id'=>$sale_id,
//                             'product_id'=>$item ->product_id,
//                             'product_price'=>$item->product->product_price,
//                             'product_quantity'=>$item->quantity,
//                             'product_discount'=>$request->product_discount,
//                             'created_at'=>Carbon::now(),
//                         ]);
//                         Product::findOrFail($item->product_id)->decrement('product_quantity',$item->quantity);
//                         Cart::findOrFail($item->id)->delete();
//                     }
//                     $data = Billing::where('shipping_id',$shipping_id)->get();
//                     Mail::to(Auth::user()->email)->send(new OrderShipped($data));
//                     return Redirect::away($redirect_url);
////                     return redirect()->route('Cart')->with('msg','Payment Successful');
//                }
//                 else{
//                     \Session::put('error', 'Unknown error occurred');
//                     return back();
//                 }
         }
            ///////////////////////
            //end of paypal code//
            /////////////////////
         elseif($request->payment == '3'){
             //
             //  Stripe Code
             //
            // Set your secret key. Remember to switch to your live secret key in production!
            // See your keys here: https://dashboard.stripe.com/account/apikeys
            \Stripe\Stripe::setApiKey('sk_test_imul0jOBtLHpSJydGMakJd9i00rnRjLHdU');
            // Token is created using Checkout or Elements!
            // Get the payment token ID submitted by the form:


//             unhde it
//             $token = $request->stripeToken;
//             $charge = \Stripe\Charge::create([
//                 'amount' => $grand_total * 100,
//                 'currency' => 'usd',
//                 'description' => 'Example charge',
//                 'source' => $token,
//                 'statement_descriptor' => 'Custom descriptor',
//             ]);
//             unhde it
             $shipping_id = Shipping::insertGetId([
                 'user_id' =>$auth,
                 'name' =>$request->name,
                 'email' =>$request->email,
                 'mobile' =>$request->mobile,
                 'address' =>$request->address,
                 'country_id' =>$request->country_id,
                 'state_id' =>$request->state_id,
                 'city_id' =>$request->city_id,
                 'created_at' =>Carbon::now(),
             ]);
            $sale_id = Sale::insertGetId([
                'user_id'=>$auth,
                'shipping_id'=>$shipping_id,
                'grand_total'=>$grand_total,
                'created_at'=>Carbon::now(),
            ]);
            foreach($carts as $item){
                $bill_id = Billing::insertGetId([
                    'user_id'=>$auth,
                    'shipping_id'=>$shipping_id,
                    'sale_id'=>$sale_id,
                    'product_id'=>$item ->product_id,
                    'product_price'=>$item->product->product_price,
                    'product_quantity'=>$item->quantity,
                    'product_discount'=>$request->product_discount,
                    'created_at'=>Carbon::now(),
                ]);
                Product::findOrFail($item->product_id)->decrement('product_quantity',$item->quantity);
                Cart::findOrFail($item->id)->delete();
            }
            $data = Billing::where('shipping_id',$shipping_id)->get();
            Mail::to(Auth::user()->email)->send(new OrderShipped($data));
             return redirect()->route('Cart')->with('msg','Payment Successful');
         }
         else{
             return back()->with('msg','Payment Failed');
         }
     }
     //End of Payment Method
//    Watch payments
    public function getPaymentStatus(Request $request){
        /** Get the payment ID before session clear **/
        $payment_id = Session::get('paypal_payment_id');
        /** clear the session payment ID **/
        Session::forget('paypal_payment_id');
        if (empty($request->payerID) || empty($request->token))  {
            \Session::put('error', 'Payment failed');
            return Redirect::route('/');
        }
         $payment = Payment::get($payment_id, $this->_api_context);
         $execution = new PaymentExecution();
         $execution->setPayerId($request->payerID);
         /**Execute the payment **/
         $result = $payment->execute($execution, $this->_api_context);
         if ($result->getState() == 'approved') {
             \Session::put('success', 'Payment success');
             return Redirect::route('/');
         }
         \Session::put('error', 'Payment failed');
         return Redirect::route('/');
    }
}
