<?php

namespace App\Http\Controllers\front;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($category)
    {
        $products = Product::where('category_id',$category)->get();
        //dd($products);
        $categories = Category::all();
        return view("pages.front.product", compact('products', 'categories', 'category'));
    }

    public function single($product_id)
    {

        $product = Product::where('id', $product_id)->first();
        $category = Category::where('id', $product->category_id)->first()->id;
        $products = Product::where('category_id', $category)->get();
        $categories = Category::all();
        //dd($product);
        return view("pages.front.single_product", compact('product', 'categories', 'category', 'products'));
    }
}
