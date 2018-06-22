<?php

namespace App\Http\Controllers;

use App\Images;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $products = Product::where('active', '=', 1)->paginate(12);
        foreach ($products as $product){
            $product->images = DB::table('images')->where('product_id', $product->product_id)->get();
        }
        $categorys = DB::table('category')->where('active', '=', 1)->select('category_id')->get();
        foreach ($categorys as $item){
            $category[] = $item->category_id;
        }
        $productInCategory = DB::table('product')->whereIn('category_id', $category)->where('display_home', 1)->get();
        foreach ($productInCategory as $item){
            $item->images = DB::table('images')->where('product_id', $item->product_id)->get();
        }
        return view('page.home', compact('products', 'productInCategory'));
    }
    public function products(){
        return view('page.products');
    }
    public function detail(){
        return view('page.detail');
    }
    public function cart(){
        return view('page.cart');
    }
}
