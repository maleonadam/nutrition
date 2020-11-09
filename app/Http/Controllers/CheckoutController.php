<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use Auth;
use Session;
use Mail;
use App\Order;
use App\OrderProduct;
use App\Mail\OrderPlaced;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('manage.checkout.index');
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
        $this->validate(request(), [
            'email' => 'required|string|email|max:255',
            'phone'=>'required',
            'organization'=>'required',
            'address'=>'required',
            'city'=>'required',
            'country'=>'required',
            'message'=>'required',
        ]);

        $order = $this->addToOrdersTables($request, null);

        // send mail
        // Mail::send(new OrderPlaced($order));

        Cart::destroy();

        Session::flash('success-message', 'Order placed successfully...');
        return redirect()->route('confirmation.index');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    protected function addToOrdersTables($request, $error)
    {
        // Insert into orders table
        // $order = Order::create([
        //     'user_id' => Auth::user()->id,
        //     'message' => $request->message,
        //     'error' => $error,
        // ]);
        $order = new Order;

        $order->user_id = Auth::user()->id;
        $latestOrder = Order::orderBy('created_at', 'DESC')->first();
        if (! $latestOrder ) {
            $number = 0;
            $order->order_number = 'ORD' . sprintf('%06d', intval($number) + 1);
        } else {
            $number = substr($latestOrder->order_number, 3);
            $order->order_number = 'ORD' . sprintf('%06d', intval($number) + 1);
        }
        $order->order_total = getNumbers()->get('newTotal');
        $order->phone = $request->input('phone');
        $order->organization = $request->input('organization');
        $order->address = $request->input('address');
        $order->city = $request->input('city');
        $order->country = $request->input('country');
        $order->matrix = $request->input('matrix');
        $order->origin = $request->input('origin');
        $order->intended_use = $request->input('intended_use');
        $order->message = $request->input('message');
        $order->save();

        // insert into order_product table
        foreach (Cart::content() as $item) {
            OrderProduct::create([
                'order_id' => $order->id,
                'product_id' => $item->model->id,
                'quantity' => $item->qty,
            ]);
        }

        return $order;
    }
    
}
