<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Coupon;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CartController extends Controller
{

    function Wish($coupon = '')
    {
        if ($coupon == ''){
            $ip = $_SERVER['REMOTE_ADDR'];
            $mac = exec('getmac');
            $mac = strtok($mac, ' ');

            $carts = Cart::where('user_ip', $ip)->where('device', $mac)->with('product')->get();

            $grand_total = $discount_p = $discount_r = 0;
            foreach ($carts as $val) {
                $grand_total += $val->product->product_price * $val->quantity;
            }

            session(['discount_r'=>$discount_r]);
            session(['grand_total'=>$grand_total]);

            return view('frontend.wishlist', compact('carts','coupon','grand_total','discount_p','discount_r'));
        }
        else{
            if (Coupon::where('coupon_code',$coupon)->exists()){
                $cou = Coupon::where('coupon_code',$coupon)->first();
                if (Carbon::now() >= $cou->coupon_start && Carbon::now() <= $cou->coupon_ends){
                    $ip = $_SERVER['REMOTE_ADDR'];
                    $mac = exec('getmac');
                    $mac = strtok($mac, ' ');
                    $carts = Cart::where('user_ip', $ip)->where('device', $mac)->with('product')->get();
                    $grand_total = 0;
                    foreach ($carts as $val) {
                        $grand_total += $val->product->product_price * $val->quantity;
                    }
                    $discount_p = $discount_r = 0;

                    $discount_p = $cou->coupon_discount;
                    $discount_r = (($grand_total*$discount_p)/100);
                    $grand_total = $grand_total - $discount_r;

                    session(['discount_r'=>$discount_r]);
                    session(['grand_total'=>$grand_total]);
                    return view('frontend.wishlist', compact('carts','coupon','grand_total','discount_p','discount_r'));
                }
                else{
                  return back()->with('invalid','Coupon Expired or not started Yet');
                }
            }
            else{
                return back()->with('invalid','Coupon Expired')->with('invalid','this Coupon is Invalid');
            }
        }
    }

    function Cart($coupon = '')
    {
        if ($coupon == ''){
            $ip = $_SERVER['REMOTE_ADDR'];
            $mac = exec('getmac');
            $mac = strtok($mac, ' ');

            $carts = Cart::where('user_ip', $ip)->where('device', $mac)->with('product')->get();

            $grand_total = $discount_p = $discount_r = 0;
            foreach ($carts as $val) {
                $grand_total += $val->product->product_price * $val->quantity;
            }

            session(['discount_r'=>$discount_r]);
            session(['grand_total'=>$grand_total]);

            return view('frontend.cart', compact('carts','coupon','grand_total','discount_p','discount_r'));
        }
        else{
            if (Coupon::where('coupon_code',$coupon)->exists()){
                $cou = Coupon::where('coupon_code',$coupon)->first();
                if (Carbon::now() >= $cou->coupon_start && Carbon::now() <= $cou->coupon_ends){
                    $ip = $_SERVER['REMOTE_ADDR'];
                    $mac = exec('getmac');
                    $mac = strtok($mac, ' ');
                    $carts = Cart::where('user_ip', $ip)->where('device', $mac)->with('product')->get();
                    $grand_total = 0;
                    foreach ($carts as $val) {
                        $grand_total += $val->product->product_price * $val->quantity;
                    }
                    $discount_p = $discount_r = 0;

                    $discount_p = $cou->coupon_discount;
                    $discount_r = (($grand_total*$discount_p)/100);
                    $grand_total = $grand_total - $discount_r;

                    session(['discount_r'=>$discount_r]);
                    session(['grand_total'=>$grand_total]);
                    return view('frontend.cart', compact('carts','coupon','grand_total','discount_p','discount_r'));
                }
                else{
                  return back()->with('invalid','Coupon Expired or not started Yet');
                }
            }
            else{
                return back()->with('invalid','Coupon Expired')->with('invalid','this Coupon is Invalid');
            }
        }
    }

    function CartUpdate(Request $request){

        $ip = $_SERVER['REMOTE_ADDR'];
        $mac = exec('getmac');
        $mac = strtok($mac,' ');

        if (Cart::where('user_ip',$ip)->where('device',$mac)->exists()){
            foreach ($request->id as $key=>$value){
                Cart::findOrFail($value)->update([
                    'quantity'=> $request->p_quantity[$key],
                ]);
            }
            return back();
        }
        else{
            return Redirect::back()->with('msg', 'Failed To Update Data');
        }
    }
}
