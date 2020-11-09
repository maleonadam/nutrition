<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Cart;
use Validator;
use App\Product;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('manage.cart.index');
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
    public function store(int $id)
    {
        $duplicates = Cart::search(function($cartItem, $rowId) use ($id){
            return $cartItem->id === $id;
        });

        if ($duplicates->isNotEmpty()) {
            Session::flash('delete-message', 'Item already in Cart! Just increase Quantity.');
            return redirect()->route('cart.index');
        } 

        $product=Product::find($id);
        
        Cart::add($id, $product->name, 1, $product->price, 500)->associate('App\Product');

        Session::flash('success-message', 'Item added to cart successfully...');
        return redirect()->route('cart.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // $validator = Validator::make($request->all(), [
        //     'quantity' => 'required|numeric|between:1,5'
        // ]);
        
        // if ($validator->fails()) {
        //     Session::flash('errors', 'Quantity must be between 1 and 5!');
        //     return response()->json(['success' => false], 400);
        // }

        $qty=$request->qty;
        $proId=$request->prodId;
        // $product=Product::findOrFail($proId);
        // $stock=$product->stock;

        // if($qty<$stock){
        Cart::update($id, $request->qty);

        Session::flash('success-message', 'Quantity updated successfully...');
        return back();
        // }else{
        //     Session::flash('errors', 'Quantity more than stock!');
        //     return back();
        // }

        // Cart::update($id, $request->quantity);

        // Session::flash('success-message', 'Quantity updated successfully...');
        // return response()->json(['success' => true]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cart::remove($id);

        Session::flash('delete-message', 'Item removed successfully...');
        return back();
    }
}
