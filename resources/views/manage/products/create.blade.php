@extends('layouts.other')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col">
                @include('layouts.alerts')
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3><i class="fa fa-edit"></i> <strong>New Product</strong></h3>
                        <p><b><a href="{{ route('adminproducts') }}">Products</a></b> <i class="fa fa-chevron-right fa-sm"></i>
                            <b>Add new Product</b></p>
                    </div>

                    <div class="card-body">
                        <form class="form-horizontal" action="{{ route('adminproducts.store') }}" method="POST">
                            {{csrf_field()}}

                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" name="name" placeholder="enter name..." required>
                            </div>

                            <div class="form-group">
                                <label for="details">Details</label>
                                <textarea class="form-control" type="text" name="details" cols="30" rows="5" placeholder="enter details..." required></textarea>
                            </div>

                            <div class="form-group">
                                <label for="price">Unit cost per sample (USD)</label>
                                <input type="number" class="form-control" name="price" placeholder="enter price..." required>
                            </div>

                            <div class="cart-buttons">
                                <a href="{{ route('adminproducts') }}" class="btn btn-sm btn-warning"><i class="fa fa-angle-left"></i> Back</a>
                                <button type="submit" class="btn btn-sm btn-success">Submit <i class="fa fa-angle-right"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection