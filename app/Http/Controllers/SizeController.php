<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Size;
use Illuminate\Http\Request;

class SizeController extends Controller
{
    function sizeadd(){
    	return view('backend.size.size');
    }

    function sizepost(Request $request){

        $size_name = strtolower($request->size_name);
        $request->validate([
            'size_name' => 'required | unique:sizes'
        ]);
        $size = size::where('size_name', $request->size_name)->exists();
        if ($size) {
            return back()->with('message','size name Already Exists');
        }
        else{
            size::insert([
                'size_name'=>$size_name,
                'created_at'=>Carbon::now(),
            ]);
            return back()->with('msg','Size Name Added Successfully');
        }
    }

    function sizeview(){

        $sizes = Size::paginate(10);
        return view('backend.size.sizeview',compact('sizes'));
    }

}
