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
                        <h3><i class="fa fa-briefcase"></i> <strong>Products</strong></h3>
                        <div class="row d-flex justify-content-between">
                            <p><b><a href="{{ route('welcome') }}">Home</a></b> <i class="fa fa-chevron-right fa-sm"></i>
                            <b>All Products</b></p>
                            <p><a href="{{ route('adminproducts.create') }}" class="btn btn-sm btn-warning">Add New Product</a></p>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered mb-0 table-hover">
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col">Product</th>
                                        <th scope="col">Details</th>
                                        <th scope="col">Unit cost per sample (USD)</th>
                                        <th class="text-center" colspan="2">Actions</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach($products as $product)
                                    <tr>
                                        <td><p><strong>{{ $product->name }}</strong></p></td>
                                        <td>{{ $product->details }}</td>
                                        <td>{{ $product->price }}</td>
                                        <td class="text-center">
                                            <a href="{{ route('adminproducts.edit', $product->id) }}" class="btn btn-outline-warning btn-sm">
                                                <i class="fa fa-edit">edit</i>
                                            </a>
                                            </td>
                                            <td class="text-center">
                                            <a href="{{ route('adminproducts.destroy', $product->id) }}" class="btn btn-outline-danger btn-sm">
                                                <i class="fa fa-trash">del</i>
                                            </a> 
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>

                                <tfoot class="table-dark">
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td><strong></strong></td>
                                        <td><strong></strong></td>
                                        <td colspan="2"><strong></strong></td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection