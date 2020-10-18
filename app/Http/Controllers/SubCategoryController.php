<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\subCategory;
// use Carbon\carbon;

class SubCategoryController extends Controller
{
    function subCategory(){
    	$categories = Category::orderBy('category_name','asc')->get();
        return view('backend.category.subcategory',compact('categories'));
    }
    function subCategoryPost(Request $request)
    {

        $Category = subCategory::where('category_id',$request->category_id)->where('subCategory_name', $request->subCategory_name)->exists();
        if ($Category) {
            return back()->with('message', 'Category Name Already Exists');
        }
        else{
            $data = new subCategory;
            $data->category_id = $request->category_id;
            $data->subCategory_name = $request->subCategory_name;
            $data->save();
            return back()->with('success', 'Sub Category Added Successfully');
        }
    }
    function subCategoryList(){
    	$subcat = SubCategory::paginate(15);
    	return view('backend.category.subcategorylist',compact('subcat'));
    }
    function subCategoryTrash(){
        return back()->with('msg','Sorry! is Turned off for Security reason');
    }
    function subCategoryEdit(){
        return back()->with('msg','Sorry! Editing is Turned off for Security reason');
    }
    function subCategoryUpdate(){
        return back()->with('msg','Sorry! Updating is Turned off for Security reason');
    }
    function subCategoryDelete(){
        return back()->with('msg','Sorry! Delete is Turned off for Security reason');
    }
    function subCategoryPermanent(){
        return back()->with('msg','Sorry! is Turned off for Security reason');
    }
    function subCategoryRestore(){
        return back()->with('msg','Sorry! is Turned off for Security reason');
    }

}
