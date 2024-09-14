<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        $latestproducts = Product::latest()->limit(3)->get();
        return view('welcome', compact('latestproducts'));
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function shop()
    {
        $products = Product::paginate(10);
     
        $categories = Category::all();
        return view('shop', compact('products', 'categories'));
       
    }

    public function search(Request $request)
{
   
    // Get all categories
        $categories = Category::all();
    
        // Get search and category filter input
        $search = $request->input('search');
        $category = $request->input('category');
    
        // Fetch all products initially
        $products = Product::query();
    
        // Filter by category if selected
        if ($category) {
            $products->where('category_id', $category);
        }
    
        // Apply search filter if provided
        if ($search) {
            $products->where('name', 'like', '%' . $search . '%');
        }
    
        // Fetch filtered products
        $products = $products->get();
    
        return view('shop', compact('products', 'categories'));
    }
    



    public function categoryproducts($catid)
    {
        $category = Category::find($catid);
        $products = Product::where('category_id', $catid)->paginate(3);
        return view('categoryproducts', compact('products', 'category'));
    }

    public function viewproduct($id)
    {
        $product = Product::find($id);
        $relatedproducts = Product::where('category_id',$product->category_id)->where('id','!=',$id)->get();
        return view('viewproduct', compact('product', 'relatedproducts'));
    }

    public function myprofile()
    {
        $orders = Order::where('user_id', auth()->user()->id)->get();
        return view('myprofile',compact('orders'));
    }
}
