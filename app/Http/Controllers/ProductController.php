<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Session;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products=Product::orderBy('id', 'ASC')->get();
        return view('manage.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('manage.products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(), [
            'name'=>'required',
            'details'=>'required',
            'price'=>'required'
        ]);

        // save item to database
        $product = new Product();
        $product->name = $request->input('name');
        $product->details = $request->input('details');
        $product->price = $request->input('price');
        $product->save();

        Session::flash('success-message', 'Product added successfully...');
        return redirect()->route('adminproducts.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        return view('manage.products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //validate form
        $this->validate(request(), [
            'name'=>'required',
            'details'=>'required',
            'price'=>'required',
        ]);

        Product::where('id', $id)->update(request(['name', 'details', 'price']));

        Session::flash('success-message', 'Product updated successfully...');
        return redirect()->route('adminproducts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::where('id', $id)->delete($id);

        Session::flash('delete-message', 'Product deleted successfully...');
        return back();
    }
}
