<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Carbon\carbon;

class CategoryController extends Controller
{

     public function __construct()
    {
        $this->middleware('verified');
    }

    function category(){
    	return view('backend.category.category_form');
    }

    function CategoryPost(Request $request)
    {
        $request->validate([
            "category_name" => "required | max:20 | min:3",
        ],
            [
                "category_name.required" => "nam nai",
            ]);
        $Category = Category::where('category_name', $request->category_name)->exists();
        if ($Category) {
            return back()->with('message','Category Name Already Exists');
        }
        else {
            Category::insert([
                'category_name' => $request->category_name,
                'created_at' => Carbon::now('Asia/Dhaka'),
            ]);
            return back()->with('success', 'Category Name Added Successfully');
        }
    }

    function CategoryView(){
        $categories = Category::paginate(15);
        return view('backend.category.category_view',compact('categories'));
    }

    function CategoryTrash(){
    	$trash = Category::onlyTrashed()->paginate(15);
    	return view('backend.category.category_trash',compact('trash'));
    }

    function CategoryDelete($category_id){
    	// Category::where('id', $category_id)->delete();
    	Category::findOrFail($category_id)->delete();
    	return back()->with('msg','Deleted but can be found in Trash');
    }

    function CategoryPermanent($category_id){
    	// Category::where('id', $category_id)->delete();
//    	Category::onlyTrashed()->findOrFail($category_id)->forceDelete();
    	return back()->with('msg','Sorry! Permanent Delete is Turned off for Security reason');
    }

    function CategoryRestore($category_id){
    	Category::onlyTrashed()->findOrFail($category_id)->restore();
    	return back()->with('msg2','Successfully Restored From Trash');;
    }

    function CategoryEdit($category_id){

    	$Category = Category::findOrFail($category_id);
    	session(['cat'=> $category_id]);
    	return view('backend.category.category_edit',compact('Category'));
    }

    function CategoryUpdate(Request $request){

    	$cat_id = $request->session()->get('cat');
    	$Category = Category::where('category_name', $request->category_name)
        ->exists();
        if ($Category){return "same name returning";}
        else{
            Category::findOrFail($cat_id)->Update([
                'category_name'=>$request->category_name,
                'updated_at'=> Carbon::now('Asia/Dhaka'),
            ]);
            return back()->with('success','Category name Updated Successfully');
        }
    }
}
