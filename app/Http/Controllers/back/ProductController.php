<?php

namespace App\Http\Controllers\back;
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
    public function index()
    {
        $products = Product::all();
        //dd($products);
        $categories = Category::all();
        return view("pages.back.product.index", compact('products', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'category_id' => 'required',
            'price' => 'required',
            'name' => 'required',
            'image'=>'required|image|mimes:jpeg,png,jpg,gif|max:3200',
            'description' => 'required'
        ]);
        $inputs=$request->all();
        if($photo=$request->file("image")){
            $newfile=strtotime(date("Y-m-d H:i:s")).".".$photo->getClientOriginalExtension();
            $photo->move('images/products/',$newfile);
            $inputs['image']=$newfile;
        }

        Product::create($inputs);

        return redirect()->route('products.index')
                ->with('success','Product created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('pages.back.product.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        
        $request->validate([
            'category_id' => 'required',
            'name' => 'required',
            'price' => 'required',
            //'image'=>'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'required',
        ]);

        $inputs=$request->all();
        
        if($photo=$request->file("image")){
            unlink('images/products/'.$product->image);
            $newfile=strtotime(date("Y-m-d H:i:s")).".".$photo->getClientOriginalExtension();
            $photo->move('images/products/',$newfile);
            $inputs['image']=$newfile;

        }
        //dd($inputs);
        $product->update($inputs);

        return redirect()->route('products.index')
                ->with('success','Product updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        unlink('images/products/'.$product->image);
        $product->delete();

        return redirect()->route('products.index')
                        ->with('success','Product successfully deleted');
    }
}
