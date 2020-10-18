<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Color;
use Illuminate\Http\Request;

class ColorController extends Controller
{
    public function coloradd(){
    	return view('backend.color.color');
    }
	public function ColorPost(Request $request){
        $color_name = strtolower($request->color_name);
        $request->validate([
            'color_name' => 'required | unique:colors'
        ]);
         $color = Color::where('color_name', $request->color_name)->exists();
         if ($color) {
             return back()->with('message','category name Already Exists');
         }
         else{
    		Color::insert([
    			'color_name'=>$color_name,
    			'color_code'=>$request->color_code,
    			'created_at'=>Carbon::now(),
    		]);
            return back()->with('message','Color Added Successfully');
         }
    }
    public function colorview(){
        $colors = Color::paginate(20);
    	return view('backend.color.colorview',compact('colors'));
    }

    public function colorEdit(){
        return back()->with('msg','Sorry! Editing is Turned off for Security reason');
    }
    public function colorDelete(){
        return back()->with('msg','Sorry! Delete is Turned off for Security reason');
    }
}
