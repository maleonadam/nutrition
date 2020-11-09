@extends('layouts.other')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3><i class="fa fa-chevron-circle-down"></i> <strong>Order</strong></h3>
                        <p>
                            <b><a href="{{ route('my-orders.index') }}">
                                My Orders</a></b> <i class="fa fa-chevron-right fa-sm"></i>
                            <b>Order Details</b>
                        </p>
                    </div>

                    <div class="card-body">

                        <div class="row mb-2">
                            <div class="col-4">
                                <h6 class="text-left"><b>Order Number:</b> {{ $order->order_number }}</h6>
                            </div>
                            <div class="col-4">
                                <h6 class="text-center"><b>Date Placed:</b> {{ $order->created_at->toFormattedDateString() }}</h6>
                            </div>
                            <div class="col-4">
                                @if($order->order_status_id === 1)
                                    <p class="text-right"><b>Order Status:</b> <span class="badge badge-light">Submitted</span></p>
                                @elseif($order->order_status_id === 2)
                                    <p class="text-right"><b>Order Status:</b> <span class="badge badge-info">Received</span></p>
                                @elseif($order->order_status_id === 3)
                                    <p class="text-right"><b>Order Status:</b> <span class="badge badge-warning">Processing</span></p>
                                @else 
                                    <p class="text-right"><b>Order Status:</b> <span class="badge badge-success">Completed</span></p>
                                @endif 
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 table-responsive">
                                <table class="table table-bordered table-sm table-hover">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>Product</th>
                                            <th>Details</th>
                                            <th class="text-center">No. of samples</th>
                                            <th class="text-center">Item Status</th>
                                            <th class="text-center">Results</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($products as $product)
                                            <tr>
                                                <td>{{ $product->name }}</td>
                                                <td>{{ $product->details }}</td>
                                                <td class="text-center">{{ $product->pivot->quantity }}</td>
                                                <td class="text-center"><p class="badge badge-light">submitted</p></td>
                                                <td class="text-center"><p class="badge badge-light">pending!</p></td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot class="table-dark">
                                        <tr>
                                            <td>&nbsp;</td>
                                            <td><strong></strong></td>
                                            <td><strong></strong></td>
                                            <td><strong></strong></td>
                                            <td><strong></strong></td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            
                <section class="invoice">
                    
                    
                    
                </section>
        </div>
    </div>
@endsection
