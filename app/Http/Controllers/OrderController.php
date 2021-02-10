<?php

namespace App\Http\Controllers;

use App\Order;
use App\Product;
use App\OrderStatus;
use App\OrderProduct;
use App\Mail\OrderStatusChange;
use App\Mail\OrderRejected;
use App\Mail\BudgetUploaded;
use App\Mail\InvoiceUploaded;
use App\Mail\PaymentUploaded;
use App\Mail\ServiceUploaded;
use App\Mail\SignedServiceUploaded;
use App\Mail\ResultsUploaded;
use Mail;
use Session;
use Auth;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    // authentication
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    // my orders
    public function index()
    {
        $orders = Auth::user()->orders()->orderBy('created_at', 'desc')->paginate(10);

        $products = Product::orderBy('created_at', 'ASC')->get();
    
        return view('manage.orders.my-orders.index', compact('orders', 'products'));
    }

    // all orders
    public function allorders()
    {
        $orders = Order::orderBy('created_at', 'desc')->paginate(10);

        $products = Product::orderBy('created_at', 'ASC')->get();

        return view('manage.orders.all-orders.index', compact('orders', 'products'));
    }

    // client view single order
    public function clientViewSingleOrder($id)
    { 
        $order = Order::findOrFail($id);

        // $products = $order->products;
        $order_products = OrderProduct::where('order_id', $id)->get();

        $products = Product::join('order_products', 'products.id', '=', 'order_products.product_id');

        return view('manage.orders.my-orders.show', compact(['order', 'order_products','products']));
    }

    // staff view single order
    public function staffViewSingleOrder($id)
    {
        $order = Order::findOrFail($id);

        $order_products = OrderProduct::where('order_id', $id)->get();
        // dd($order_products);
        $products = Product::join('order_products', 'products.id', '=', 'order_products.product_id');

        return view('manage.orders.all-orders.show', compact(['order', 'order_products','products']));
    }

    // get order status page
    public function edit($id)
    {
        $order = Order::findOrFail($id);
        return view('manage.orders.all-orders.edit', compact('order'));
    }

    // get order accept/reject page
    public function getReject($id)
    {
        $order = Order::findOrFail($id);
        return view('manage.orders.all-orders.accept_reject_order', compact('order'));
    }

    // update order status
    public function update(Request $request, $id)
    {
        $order = Order::findOrFail($id);

        $order->order_status_id = $request->order_status_id;
        
        $order->save();

        // send mail
        // Mail::send(new OrderStatusChange($order));

        Session::flash('success-message', 'Order updated successfully...');
        return redirect()->route('all-orders.index');
    }

    // reject order
    public function rejectOrder(Request $request, $id)
    {
        $order = Order::findOrFail($id);

        $order->accept_order = $request->accept_order;
        $order->reject_reason = $request->reject_reason;
        
        $order->save();

        if ($order->accept_order == 2) {
            // send mail
            Mail::send(new OrderRejected($order));
        }
        // send mail
        // Mail::send(new OrderRejected($order));

        // Session::flash('error', 'Order has been rejected!!!');
        return redirect()->route('all-orders.index');
    }

    public function editItemStatus($id)
    { 
        $order_product = OrderProduct::findOrFail($id);
        return view('manage.order_items.item_status', compact('order_product'));
    }

    public function updateItemStatus(Request $request, $id)
    {
        $order_product = OrderProduct::findOrFail($id);

        $order_product->item_status = $request->input('item_status');

        $order_product->save();

        Session::flash('success-message', 'Status updated successfully...');
        return back();
    }

    public function itemResult($id)
    {
        $order_product = OrderProduct::findOrFail($id);
        return view('manage.order_items.item_result', compact('order_product'));
    }

    public function uploadItemResult(Request $request, $id)
    {
        $order_product = OrderProduct::findOrFail($id);

        if ($request->file('item_result')) {
            $item_result = $request->file('item_result');
            $filename = time().'.'.$item_result->getClientOriginalExtension();
            $request->item_result->move('storage/itemresult', $filename);

            $order_product->item_result = $filename;
        }

        $order_product->save();

        // send mail
        // Mail::send(new ResultsUploaded($order));

        Session::flash('success-message', 'Results uploaded successfully...');
        return back();
    }

    // download item results
    public function downloadItemResult($item_result)
    {
        return response()->download('storage/itemresult/'.$item_result);
    }

    // delete order
    public function destroy(Order $order)
    {
        //
    }

    // upload budget page
    public function budget($id)
    {
        $order = Order::findOrFail($id);
        return view('manage.orders.all-orders.budget', compact('order'));
    }

    // upload invoice page
    public function invoice($id)
    {
        $order = Order::findOrFail($id);
        return view('manage.orders.all-orders.invoice', compact('order'));
    }

    // upload payment page
    public function payment($id)
    {
        $order = Order::findOrFail($id);
        return view('manage.orders.my-orders.payment', compact('order'));
    }

    // upload service page
    public function service($id)
    {
        $order = Order::findOrFail($id);
        return view('manage.orders.all-orders.service_specification', compact('order'));
    }

    // upload signed_service page
    public function signed($id)
    {
        $order = Order::findOrFail($id);
        return view('manage.orders.my-orders.signed_service_speci', compact('order'));
    }

    // upload order results page
    public function results($id)
    {
        $order = Order::findOrFail($id);
        return view('manage.orders.all-orders.results', compact('order'));
    }

    // upload order rawdata page
    public function rawdata($id)
    {
        $order = Order::findOrFail($id);
        return view('manage.orders.all-orders.rawdata', compact('order'));
    }

    // upload order budget
    public function uploadBudget(Request $request, $id)
    {
        $order = Order::findOrFail($id);

        if ($request->file('budget')) {
            $budget = $request->file('budget');
            $filename = time().'.'.$budget->getClientOriginalExtension();
            $request->budget->move('storage/budget', $filename);

            $order->budget = $filename;
        }

        $order->save();

        // send mail
        // Mail::send(new BudgetUploaded($order));

        Session::flash('success-message', 'Budget uploaded successfully...');
        return redirect()->route('all-orders.index');
    }

    // upload order invoice
    public function uploadInvoice(Request $request, $id)
    {
        $order = Order::findOrFail($id);

        if ($request->file('invoice')) {
            $invoice = $request->file('invoice');
            $filename = time().'.'.$invoice->getClientOriginalExtension();
            $request->invoice->move('storage/invoice', $filename);

            $order->invoice = $filename;
        }

        $order->save();

        // send mail
        // Mail::send(new InvoiceUploaded($order));

        Session::flash('success-message', 'Invoice uploaded successfully...');
        return redirect()->route('all-orders.index');
    }

    // upload order payment
    public function uploadPayment(Request $request, $id)
    {
        $order = Order::findOrFail($id);

        if ($request->file('payment_proof')) {
            $payment_proof = $request->file('payment_proof');
            $filename = time().'.'.$payment_proof->getClientOriginalExtension();
            $request->payment_proof->move('storage/payment', $filename);

            $order->payment_proof = $filename;
        }

        $order->save();

        // send mail
        // Mail::send(new PaymentUploaded($order));

        Session::flash('success-message', 'Payment Receipt uploaded successfully...');
        return redirect()->route('my-orders.index');
    }

    // upload order service specification
    public function uploadService(Request $request, $id)
    {
        $order = Order::findOrFail($id);

        if ($request->file('service_speci')) {
            $service_speci = $request->file('service_speci');
            $filename = time().'.'.$service_speci->getClientOriginalExtension();
            $request->service_speci->move('storage/servicespeci', $filename);

            $order->service_speci = $filename;
        }

        $order->save();

        // send mail
        // Mail::send(new ServiceUploaded($order));

        Session::flash('success-message', 'Service Specification uploaded successfully...');
        return redirect()->route('all-orders.index');
    }

    // upload order signed service specification
    public function uploadSigned(Request $request, $id)
    {
        $order = Order::findOrFail($id);

        if ($request->file('signed_service_speci')) {
            $signed_service_speci = $request->file('signed_service_speci');
            $filename = time().'.'.$signed_service_speci->getClientOriginalExtension();
            $request->signed_service_speci->move('storage/signedspeci', $filename);

            $order->signed_service_speci = $filename;
        }

        $order->save();

        // send mail
        // Mail::send(new SignedServiceUploaded($order));

        Session::flash('success-message', 'Signed Service Specification uploaded successfully...');
        return redirect()->route('my-orders.index');
    }

    // upload order results
    public function uploadResults(Request $request, $id)
    {
        $order = Order::findOrFail($id);

        if ($request->file('result')) {
            $result = $request->file('result');
            $filename = time().'.'.$result->getClientOriginalExtension();
            $request->result->move('storage/result', $filename);

            $order->result = $filename;
        }

        $order->save();

        // send mail
        // Mail::send(new ResultsUploaded($order));

        Session::flash('success-message', 'Results uploaded successfully...');
        return redirect()->route('all-orders.index');
    }

    // upload order raw data
    public function uploadRawdata(Request $request, $id)
    {
        $order = Order::findOrFail($id);

        if ($request->file('rawdata')) {
            $rawdata = $request->file('rawdata');
            $filename = time().'.'.$rawdata->getClientOriginalExtension();
            $request->rawdata->move('storage/rawdata', $filename);

            $order->rawdata = $filename;
        }

        $order->save();

        // send mail
        // Mail::send(new RawdataUploaded($order));

        Session::flash('success-message', 'Raw data uploaded successfully...');
        return redirect()->route('all-orders.index');
    }

    // download order budget
    public function downloadBudget($budget)
    {
        return response()->download('storage/budget/'.$budget);
    }

    // download order invoice
    public function downloadInvoice($invoice)
    {
        return response()->download('storage/invoice/'.$invoice);
    }

    // download order payment
    public function downloadPayment($payment)
    {
        return response()->download('storage/payment/'.$payment);
    }

    // download order service specification
    public function downloadService($service)
    {
        return response()->download('storage/servicespeci/'.$service);
    }

    // download order signed service specification
    public function downloadSigned($signed)
    {
        return response()->download('storage/signedspeci/'.$signed);
    }

    // download order results
    public function downloadResults($result)
    {
        return response()->download('storage/result/'.$result);
    }

    // download order raw data
    public function downloadRawdata($rawdata)
    {
        return response()->download('storage/rawdata/'.$rawdata);
    }

    // search orders
    public function search(Request $request)
    {
        $this->validate($request, [
            'search' => 'required',
        ],
        [
            'search.required' => 'You need to search an order.',
        ]);

        $query = $request->input('search');

        $orders = Order::where('order_number', 'LIKE', '%' . $query . '%')->paginate(5);

        return view('manage.orders.all-orders.index', compact('orders'));
    }

}
