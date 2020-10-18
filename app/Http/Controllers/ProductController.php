<?php

namespace App\Http\Controllers;

use App\ProductColor;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\color;
use App\size;
use App\Category;
use App\subCategory;
use App\Product;
use App\ProductImage;
use Carbon\carbon;
use Image;

class ProductController extends Controller
{
    function Productdelete(){
        return back()->with('message','This Fetcher is Turned of For Security Reason');
    }
	function ProductAdd(){
	 	$unique_code = Str::random(10);
		$colors = Color::orderBy('color_name','asc')->get();
		$sizes = Size::orderBy('size_name','asc')->get();
		$categories = Category::orderBy('category_name','asc')->get();
		$subcat = subCategory::orderBy('subCategory_name','asc')->get();
    	return view('backend.product.product',compact('colors','sizes','categories','subcat','unique_code'));
	}
	//Product Post
	function ProductPost(Request $request){
//        return back()->with('message','This Fetcher is Turned of For Security Reason');
//		 return $request->all();
//		 return $request->images;
     	$request->validate([
	 		"product_name"=>"required",
	 		"product_slug"=>"required",
	 		"product_code"=>"required",
	 		"product_summary"=>"required",
	 		"product_description"=>"required",
	 		"product_color"=>"required",
	 		"product_size"=>"required",
	 		"product_price"=>"required",
	 		"product_thumbnail"=>"required|mimes:jpeg,bmp,png",
	 		"product_images"=>"required|mimes:jpeg,bmp,png",
	 		"product_quantity"=>"required",
	 		"category_id"=>"required",
	 		"subcategory_id"=>"required",
	 		"product_alert"=>"required",
	 		"product_tags"=>"required",
	 		"created_at"=>"required",
	 	],
	 	[
	 		"product_name.required"=>"required",
	 		"product_slug.required"=>"required",
	 		"product_code.required"=>"required",
	 		"product_summary.required"=>"required",
	 		"product_description.required"=>"required",
	 		"product_color.required"=>"required",
	 		"product_size.required"=>"required",
	 		"product_price.required"=>"required",
	 		"product_thumbnail.required"=>"required",
	 		"product_images.required"=>"required",
	 		"product_quantity.required"=>"required",
	 		"category_id.required"=>"required",
	 		"subcategory_id.required"=>"required",
	 		"product_alert.required"=>"required",
	 		"product_tags.required"=>"required",
	 		"created_at.required"=>"required",
	 	]
	 );
        $slugchk = Product::where('product_slug', $request->product_slug)->exists();
        if ($slugchk){
            $slug = $request->product_slug;
            // Image Catching
            if ($request->hasFile('product_thumbnail')){
                $image = $request->file('product_thumbnail');
                $ext =  $slug.'.'.$image->getClientOriginalExtension();
                Image::make($image)->resize(270, 350)->save(public_path('/assets/images/shop/'.$ext, 85));
            }
            //Insert Code
            $product_id = Product::insertGetId([
                'product_name'=>$request->product_name,
                'product_slug'=>'n',
                'product_code'=>$request->product_code,
                'product_summary'=>$request->product_summary,
                'product_description'=>$request->product_desc,
                'product_color'=> json_encode($request->product_color),
                'product_size'=> json_encode($request->product_size),
                'product_price'=>$request->product_price,
                'product_thumbnail' =>$ext,
                'product_quantity'=>$request->product_quantity,
                'category_id'=>$request->category_id,
                'subcategory_id'=> json_encode($request->subcategory_id),
                'product_alert'=>$request->product_alert,
                'product_tags'=>json_encode($request->product_tags),
                'created_at'=>Carbon::now(),
            ]);
            Product::findOrFail($product_id)->update([
                'product_slug'=>$request->product_slug.$product_id,
            ]);
        }
        else {
            //Insert Code
            $product_id = Product::insertGetId([
                'product_name' => $request->product_name,
                'product_slug' => $request->product_slug,
                'product_code' => $request->product_code,
                'product_summary' => $request->product_summary,
                'product_description' => $request->product_desc,
                'product_color' => json_encode($request->product_color),
                'product_size' => json_encode($request->product_size),
                'product_price' => $request->product_price,
                'product_thumbnail' => $ext,
                'product_quantity' => $request->product_quantity,
                'category_id' => $request->category_id,
                'subcategory_id' => json_encode($request->subcategory_id),
                'product_alert' => $request->product_alert,
                'product_tags' => json_encode($request->product_tags),
                'created_at' => Carbon::now(),
            ]);
        }
        // Multiple color and its Quantity part starts here
        foreach ($request->product_color as $color){
            ProductColor::insert([
                'product_id'=>$product_id,
                'color_id'=>$color,
                'quantity'=>$request->product_quantity,
                'created_at'=>Carbon::now(),
            ]);
        }
		//Multiple image Part
    	if ($request->hasFile('product_image')){
    		$images=$request->file('product_image');
    		foreach($images as $img){
    			// return $images;
	    		$ext = $slug.Str::random(5).'.'.$img->getClientOriginalExtension();
	    		Image::make($img)->resize(540, 700)->save(public_path('/assets/images/shop/multiple/'.$ext, 85));

	    		ProductImage::Insert([
	    			'product_id'=> $product_id,
	    			'image_name'=> $ext,
	    			'created_at'=> Carbon::now(),
	    		]);
	    	}
	   		return back()->with('success','Added Successfully with Multiple Images');
    	}
    	else{
            return back()->with('success','Added Successfully without Multiple Images');
    	}
	}
	// View Product View
	function ProductList(){
		$product = Product::paginate(50);
		$images = ProductImage::all();
		$color = Color::all();
		// $color = Color::orderBy('color_name','asc')->get();
    	return view('backend.product.productlist',compact('product','images','color'));
	}
	function ProductEdit($product_slug){

        $unique_code = Str::random(10);
        $colors = Color::orderBy('color_name','asc')->get();
        $sizes = Size::orderBy('size_name','asc')->get();
        $categories = Category::orderBy('category_name','asc')->get();
        $subcat = subCategory::orderBy('subCategory_name','asc')->get();
        $product = Product::where('product_slug',$product_slug)->first();
        session(['product_slug' => $product_slug]);
	    return view('backend.product.product_edit',compact('colors','sizes','categories','subcat','unique_code','product'));
//      return $product;
    }
    function ProductUpdate(Request $request){
//        return back()->with('message','This Fetcher is Turned of For Security Reason');
        $pro = Product::where('id','!=',$request->product_id)->where('product_slug', $request->product_slug)->exists();
        if ($pro) {
            return back()->with('message','Product name Already Exists');
        }
        else{
            $slug = $request->session()->get('product_slug');
            if($request->hasFile('product_thumbnail')){
                $image=$request->file('product_thumbnail');
                $get_img = Product::where('product_slug',$slug)->first()->product_thumbnail;
                if (file_exists($get_img)){
                    unlink('assets/images/shop/'.$get_img);
                }
                $ext =  $slug.'.'.$image->getClientOriginalExtension();
                Image::make($image)->resize(540, 700)
                    ->save(public_path('/assets/images/shop/'.$ext, 85));
            }
            else{
                $ext = Product::where('product_slug',$slug)->first()->product_thumbnail;
            }
            Product::where('product_slug',$slug)->update([
                'product_name' => $request->product_name,
//                'product_slug' => $request->$slug,
//                'product_code' => $request->product_code,
                'product_summary' => $request->product_summary,
                'product_description' => $request->product_desc,
                'product_color' => json_encode($request->product_color),
                'product_size' => json_encode($request->product_size),
                'product_price' => $request->product_price,
                'product_thumbnail' => $ext,
                'product_quantity' => $request->product_quantity,
                'category_id' => $request->category_id,
                'subcategory_id' => json_encode($request->subcategory_id),
                'product_alert' => $request->product_alert,
                'product_tags' => json_encode($request->product_tags),
                'created_at' => Carbon::now(),
            ]);
            return view('backend.product.productlist')->with('success','Product Added Successfully');
        }
    }
    function multipleadd($id){
//        return back()->with('message','This Fetcher is Turned of For Security Reason');
        $PrCount='0';
        $productid = $id;
        if (Product::where('id',$productid)->exists()){
            return view('backend.product.multipleimage',compact('PrCount','productid'));
        }
        else{
            return redirect()->route('ProductList')->with('message', 'No such products');
        }
    }
    function  multipleaddpost(Request $request){
//        return back()->with('message','This Fetcher is Turned of For Security Reason');
        if ($request->hasFile('image')) {
            $images = $request->file('image');
            if (Count($images)<4 && Count($images)>0){
                $slug = Product::where('id',$request->product_id)->first('product_slug');
                foreach ($images as $img) {
                    $ext = $slug->product_slug . Str::random(5) . '.' . $img->getClientOriginalExtension();
                    Image::make($img)->resize(540, 700)
                        ->save(public_path('/assets/images/shop/multiple/' . $ext, 85));
                    ProductImage::Insert([
                    'product_id' => $request->product_id,
                    'image_name' => $ext,
                    'created_at' => Carbon::now(),
                    ]);
                }
                return redirect()->route('ProductList')->with('success', 'Added Successfully with Multiple Images');
            }
            else{
                return back()->with('message', 'You Can Add Only 1 to 3 images');
            }
        }
        else {
            return back()->with('message', 'please insert image');
        }
}
    function multipleUpdate($id){
//        return back()->with('message','This Fetcher is Turned of For Security Reason');
            //Multiple image Part
            $PrCount='1';
//            $productid = ProductImage::where('id', $id)->first('product_id') ?? '';
            $multiimgid = ProductImage::where('id', $id)->first() ?? '';
            $multiimg = ProductImage::where('product_id', $multiimgid->product_id)->get() ?? '';
            return view('backend.product.multipleimage', compact('multiimgid', 'multiimg','PrCount'));
    }
    function MulImgPost(Request $request){
//        return back()->with('message','This Fetcher is Turned of For Security Reason');
        if($request->hasFile('image')) {
            $image = $request->file('image');
            $get_img = ProductImage::where('id', $request->id)->first()->image_name ?? '';
                if (file_exists($get_img)) {
                    unlink('/assets/images/shop/multiple/' . $get_img);
                }
                Image::make($image)->resize(540, 700)
                    ->save(public_path('/assets/images/shop/multiple/' . $get_img, 85));
                return redirect()->route('ProductList');
                //            return $this->ProductList();
                //            $ext =  $slug.'.'.$image->getClientOriginalExtension();
        }
    }

}
