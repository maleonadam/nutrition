@extends('layouts.other')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3><i class="fa fa-upload"></i> <strong>Upload Specimen</strong></h3>
                    <p><b><a href="{{ route('my-orders.index') }}">My Orders</a></b> <i class="fa fa-chevron-right fa-sm"></i>
                        <b>Upload Order Specimen</b></p>
                </div>

                <div class="card-body"> 
                    <form class="form-horizontal" action="{{ route('my-orders.upload-specimen', $order->id) }}" method="POST" enctype="multipart/form-data">
                        {{csrf_field()}}
                        {{method_field('PATCH')}}

                        <div class="form-group pb-2">
                            <label for="ordernumber">Order Number</label>
                            <input type="text" class="form-control" name="order_number" value="{{ $order->order_number }}" disabled>
                        </div>

                        <div class="form-group pb-2">
                            <label for="specimen">Specimen</label>
                            <input type="file" class="form-control-file pl-0" name="specimen">
                        </div>

                        <div class="cart-buttons">
                            <a href="{{ route('my-orders.index') }}" class="btn btn-sm btn-warning"><i class="fa fa-angle-left"></i> Back</a>
                            <button type="submit" class="btn btn-sm btn-success float-right">Upload Specimen <i class="fa fa-angle-right"></i></button>
                        </div>
                    </form>                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
