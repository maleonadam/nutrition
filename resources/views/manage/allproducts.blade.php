@extends('layouts.other')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3><i class="fa fa-briefcase"></i> <strong>Products</strong></h3>
                        <p><b><a href="{{ route('welcome') }}">Home</a></b> <i class="fa fa-chevron-right fa-sm"></i>
                            <b>All Products</b></p>
                    </div>

                    <div class="card-body table-responsive">
                        <table class="table table-bordered mb-0 table-hover">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">Product</th>
                                    <th scope="col">Details</th>
                                    <th scope="col">Unit cost per sample (USD)</th>
                                    <th scope="col" class="text-center">Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($products as $product)
                                <tr>
                                    <td><p><strong>{{ $product->name }}</strong></p></td>
                                    <td>{{ $product->details }}</td>
                                    <td>{{ $product->price }}</td>
                                    <td class="text-center">
                                        <form action="{{ route('cart.store', $product->id) }}" method="get">
                                            {{ csrf_field() }}
                                            <input type="hidden" name="id" value="{{ $product->id }}">
                                            <input type="hidden" name="name" value="{{ $product->name }}">
                                            <input type="hidden" name="price" value="{{ $product->price }}">
                                            <input type="hidden" name="details" value="{{ $product->details }}">
                                            <div>
                                                <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-cart-plus"></i></button>
                                            </div>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>

                            <tfoot class="table-dark">
                                <tr>
                                    <td>&nbsp;</td>
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
@endsection