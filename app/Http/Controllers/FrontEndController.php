<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Category;
use App\Color;
use App\Comment;
use App\ProductColor;
use App\ProductReview;
use App\Size;
use App\Cart;
use Carbon\carbon;
use App\ProductImage;
use Illuminate\Http\Request;

use App\Product;

class FrontEndController extends Controller
{

   function front(){
        $product = Product::orderBy('product_name','asc')->get();
        $cats = Category::orderBy('category_name', 'asc' )->get();
        return view('frontend.main', compact('cats','product'));
   }

   function SingleProduct($slug){
        $colors = Color::all();
        $sizes = Size::all();
        $product = Product::where('product_slug',$slug)->with('category')->first();
        $images = ProductImage::where('product_id',$product->id)->get();
        $trating = ProductReview::where('product_id',$product->id)->avg('rating');
        $count = ProductReview::where('product_id',$product->id)->count('rating');
   		return view('frontend.single_product', compact('product','images','colors','sizes','trating','count'));
   }

   function AddToCart($id){
       $ip = $_SERVER['REMOTE_ADDR'];
       $mac = exec('getmac');
       $mac = strtok($mac, ' ');
       $check = Cart::where('product_id', $id)->where('user_ip', $ip)->where('device', $mac)->exists();
       if ($check) {
           Cart::where('product_id', $id)->where('user_ip', $ip)->where('device', $mac)->increment('quantity');
       }
       else{
           Cart::insert([
               'product_id' => $id,
               'user_ip' => $ip,
               'device' => $mac,
               'quantity' => 1,
               'created_at' => Carbon::now(),
           ]);
        }
      return back();
   }
   function about(){
       return view('frontend.about');
   }
   //Shop Starts
   function shop(){
       $product = Product::orderBy('product_name','asc')->paginate(5);
       $colors = Color::orderBy('color_name', 'asc' )->get();
       $cats = Category::orderBy('category_name', 'asc' )->paginate(10);
       $sizes = Size::orderBy('size_name', 'asc' )->get();
       return view('frontend.shop',compact('cats','product','sizes','colors'));
   }
    function searchshop($id){
        $product = Product::where('category_id', $id)->paginate(5)->setPath ('');
        $product->appends([
            'search' => $id,
        ]);
        $cats = Category::where('id', $id)->get();
        $colors = Color::orderBy('color_name', 'asc' )->get();
        $sizes = Size::orderBy('size_name', 'asc' )->get();
        if (Count($product)==0){
            return view('frontend.404');
        }
        else{
            return view('frontend.shop',compact('cats','product','sizes','colors'));
        }
    }
    function searchshoplike(Request $request){
       if ($request->color != ''){
            foreach ($request->color as $inut){
                $product_id = ProductColor::where('color_id', $inut ?? '')->get('product_id');
                $product = Product::whereIn('id', $product_id)->paginate(5)->setPath ('');
                $product->appends([
                    'color[]' => $inut,
                    'color[]' => $inut,
                ]);
                $cats = Category::orderBy('category_name', 'asc' )->paginate(10);
                $sizes = Size::orderBy('size_name', 'asc' )->get();
                $colors = Color::orderBy('color_name', 'asc' )->get();

                if (Count($product)==0){
                    return view('frontend.404');
                }
                else{
                    return view('frontend.shop',compact('cats','product','sizes','colors'));
                }
            }
        }
        return view('frontend.404');
    }
   //Shop Ends


   //Blog Starts
   function userblog(){
       $blog_cat = Blog::groupBy('category_id')->paginate(10);
       $blogs = Blog::paginate(3);
       return view('frontend.blog',compact('blogs','blog_cat'));
   }
   function blogsingle($id){
       $blog_cat = Blog::groupBy('category_id')->paginate(3);
       $blog = Blog::where('id',$id)->first();
       return view('frontend.blogdetails',compact('blog','blog_cat'));
   }
   function searchblog($id){
       $blog_cat = Blog::where('category_id',$id)->groupBy('category_id')->paginate(10);// Recent Blogs
       $blogs = Blog::where('category_id',$id)->paginate(3);
       return view('frontend.blog',compact('blogs','blog_cat'));
   }
   function searchbloglike(Request $request){
       $blog_cat = Blog::groupBy('category_id')->paginate(10);// Recent Blogs
       $blogs = Blog::where('title', 'like','%'.$request->blogsearch.'%')
                   ->paginate(1)
                   ->setPath ('');

       $blogs->appends([
           'blogsearch' => $request->blogsearch,
           ]);

       if (Count($blogs)==0){
           return view('frontend.404');
        }
        else{
           return view('frontend.blog',compact('blogs','blog_cat'));
        }
   }
    //Blog Ends

   function contact(){
       return view('frontend.contact');
   }
}
