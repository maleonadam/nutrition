@extends('layouts.other')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3><i class="fa fa-upload"></i> <strong> Item Results</strong></h3>
                    <p><b><a href="{{ route('all-orders.show', $order->id) }}">Order Items</a></b> <i class="fa fa-chevron-right fa-sm"></i>
                        <b>Upload Item Results</b></p>
                </div>

                <div class="card-body"> 
                    <form class="form-horizontal" action="{{ route('all-order-items.upload-result', $product->id) }}" method="POST" enctype="multipart/form-data">
                        {{csrf_field()}}
                        {{method_field('PATCH')}}

                        <div class="form-group pb-2">
                            <label for="prodid">Item Id</label>
                            <input type="text" class="form-control" name="prod_id" value="{{ $product->id }}" disabled>
                        </div>

                        <div class="form-group pb-2">
                            <label for="results">Item Results</label>
                            <input type="file" class="form-control-file pl-0" name="item_result">
                        </div>

                        <div class="cart-buttons">
                            <a href="{{ route('all-orders.show', $order->id) }}" class="btn btn-sm btn-warning"><i class="fa fa-angle-left"></i> Back</a>
                            <button type="submit" class="btn btn-sm btn-success float-right">Upload <i class="fa fa-angle-right"></i></button>
                        </div>
                    </form>                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection