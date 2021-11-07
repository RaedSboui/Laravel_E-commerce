<?php

namespace App\Http\Controllers\front;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use Cart;


class CartController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $cartItems = Cart::content();
        return view('pages.front.cart', compact('categories', 'cartItems'));
    }

    
    public function store(Request $request)
    {
       
        Cart::add([
            'id' => $request->id,
            'name' => $request->name,
            'quantity' => $request->quantity,
            'price' => $request->price,
            'options' =>[
                'image' => $request->image,
            ]  
        ]);
    

        //Cart::add($request->id, $request->name, 1, $request->price);

        return redirect()->route('front.product', $request->category_id)->with('success', 'Product is Added to Cart Successfully !');
    }



    public function update(Request $request)
    {
        Cart::update($request->rowId, $request->quantity);

        return redirect()->route('cart.index')->with('success', 'Product Quantity is Updated Successfully !');
    }



    public function remove(Request $request)
    {
        Cart::remove($request->rowId);

        return redirect()->route('cart.index')->with('success', 'Item Removed Successfully !');;
    }


  
    public function clear()
    {
        Cart::destroy();

        return redirect()->route('cart.index')->with('success', 'All Item Cart Clear Successfully !');
    }

    public function shop() 
    {
        //
    }
}
