<?php

namespace App\Http\Controllers;

use App\city;
use App\Country;
use App\State;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckController extends Controller
{
    function __construct()
    {
        $this->middleware(['auth','verified']);
    }
    public function checkout(Request $request){

        $discount = $request->session()->get('discount_r');
        $grand_total = $request->session()->get('grand_total');
        $auth = Auth::user();
        $country = Country::orderBy('name','asc')->get();
        $state = State::orderBy('name','asc')->orderBy('name','asc')->get();
        $city = city::orderBy('name','asc')->get();
        return view('frontend.checkout',compact('grand_total','discount','auth','country','state','city'));
    }
    function StateList($id){
       $state = State::where('country_id', $id)->orderBy('name','asc')->get();
       return response()->json($state);
    }
    function CityList($id){
       $city = city::where('state_id', $id)->orderBy('name','asc')->get();
       return response()->json($city);
    }
}
