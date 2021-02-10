@extends('layouts.other')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3><i class="fa fa-chevron-circle-down"></i> <strong>Order</strong></h3>
                        <p>
                            <b><a href="{{ route('all-orders.index') }}">
                                All Orders</a></b> <i class="fa fa-chevron-right fa-sm"></i>
                            <b>Order Details</b>
                        </p>
                    </div>

                    <div class="card-body">
                        <div class="row mb-4">
                            <div class="col-6">
                                <h5 class="text-left"><b>Order Number:</b> {{ $order->order_number }}</h5>
                            </div>
                            <div class="col-6">
                                <h5 class="text-right"><b>Date Placed:</b> {{ $order->created_at->toFormattedDateString() }}</h5>
                            </div>
                        </div>

                        <div class="row mb-2">
                            <div class="col-4">
                                <p class="text-left"><b>Placed By:</b> {{ $order->user->name }}</p>
                            </div>
                            <div class="col-4">
                                <p class="text-center"><b>Email:</b> {{ $order->user->email }}</p>
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
                                            <th class="text-center">Item Results</th>
                                            <th class="text-center">Update status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($order_products as $order_product)
                                            <tr>
                                                <td>{{ $order_product->product->name }}</td>
                                                <td>{{ $order_product->product->details }}</td>
                                                <td class="text-center">{{ $order_product->quantity }}</td>
                                                <td class="text-center">
                                                    @if($order_product->item_status === 1)
                                                    <p class="badge badge-light">submitted</p>
                                                    @elseif($order_product->item_status === 2)
                                                    <p class="badge badge-info">received</p>
                                                    @elseif($order_product->item_status === 3)
                                                    <p class="badge badge-warning">processing</p>
                                                    @else 
                                                    <p class="badge badge-success">completed</p>
                                                    @endif 
                                                </td>
                                                
                                                @if($order_product->item_result === null)
                                                    <td class="text-center">
                                                        <a href="{{ route('all-order-items.result', $order_product->id) }}" class="btn btn-outline-warning btn-sm">
                                                            <i class="fa fa-upload">upload</i>
                                                        </a>
                                                    </td>
                                                @else
                                                    <td scope="row" class="text-center"><a href="/item_result/download/{{$order_product->item_result}}">{{ $order_product->item_result }}</a></td>
                                                @endif

                                                <td class="text-center"><a href="{{ route('all-order-items.edit', $order_product->id) }}" class="btn btn-outline-success btn-sm">
                                                    <i class="fa fa-edit">update</i>
                                                </a></td>
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
@endsection
