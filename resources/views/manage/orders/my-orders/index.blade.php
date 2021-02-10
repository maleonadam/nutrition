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
                    <h3><i class="fa fa-bar-chart"></i> <strong>My Orders</strong></h3>
                    <p><b><a href="{{ route('allproducts') }}">Products</a></b> <i class="fa fa-chevron-right fa-sm"></i>
                  <b>My Orders</b></p>
                </div>

                <div class="card-body table-responsive"> 

                    @if($orders->count()>0)
                      <table class="table table-bordered table-sm table-hover"> 
                        <thead class="thead-light">
                          <tr>
                            <th scope="col">Order no.</th>
                            <!-- <th scope="col">Place on</th> -->
                            <!-- <th scope="col" class="text-center">Status</th> -->
                            <th scope="col" class="text-center">Budget</th>
                            <th scope="col" class="text-center">Invoice</th>
                            <th scope="col" class="text-center">Payment receipt</th>
                            <th scope="col" class="text-center">Service specification</th>
                            <th scope="col" class="text-center">Signed service specification</th>
                            <th scope="col" class="text-center">Results</th>
                            <th scope="col" class="text-center">Assaws</th>
                            <th scope="col" class="text-center">Accepted/Rejected</th>
                            <th scope="col" class="text-center">Action</th>
                          </tr>
                        </thead>

                        <tbody>
                          @foreach($orders as $order)
                            <tr>
                                <td scope="row">
                                  {{ $order->order_number }}
                                </td>

                                <!-- <td scope="row">  
                                  {{ $order->created_at->toFormattedDateString() }}
                                </td> -->

                                <!-- <td scope="row" class="text-center"> 
                                  @if($order->order_status_id === 1)
                                    <p class="badge badge-light">submitted</p>
                                  @elseif($order->order_status_id === 2)
                                    <p class="badge badge-info">received</p>
                                  @elseif($order->order_status_id === 3)
                                    <p class="badge badge-warning">processing</p>
                                  @else 
                                    <p class="badge badge-success">completed</p>
                                  @endif 
                                </td>  -->

                                @if($order->budget === null)
                                  <td scope="row" class="text-center"><p class="badge badge-light">pending!</p></td>
                                @else
                                  <td scope="row" class="text-center"><a href="/budget/download/{{$order->budget}}">Download</a></td>
                                @endif

                                @if($order->invoice === null)
                                  <td scope="row" class="text-center"><p class="badge badge-light">pending!</p></td>
                                @else
                                  <td scope="row" class="text-center"><a href="/invoice/download/{{$order->invoice}}">Download</a></td>
                                @endif

                                @if($order->payment_proof === null)
                                  <td scope="row" class="text-center">
                                    <a href="{{ route('my-orders.payment', $order->id) }}" class="btn btn-outline-warning btn-sm">
                                      <i class="fa fa-upload">upload</i>
                                    </a> 
                                  </td>
                                @else
                                  <td scope="row" class="text-center"><a href="/payment/download/{{$order->payment_proof}}">{{ $order->payment_proof }}</a></td>
                                @endif

                                @if($order->service_speci === null)
                                  <td scope="row" class="text-center"><p class="badge badge-light">pending!</p></td>
                                @else
                                  <td scope="row" class="text-center"><a href="/service/download/{{$order->service_speci}}">Download</a></td>
                                @endif

                                @if($order->signed_service_speci === null)
                                  <td scope="row" class="text-center">
                                    <a href="{{ route('my-orders.signed', $order->id) }}" class="btn btn-outline-warning btn-sm">
                                      <i class="fa fa-upload">upload</i>
                                    </a> 
                                  </td>
                                @else
                                  <td scope="row" class="text-center"><a href="/signed/download/{{$order->signed_service_speci}}">{{ $order->signed_service_speci }}</a></td>
                                @endif

                                @if($order->result === null)
                                  <td scope="row" class="text-center"><p class="badge badge-light">pending!</p></td>
                                @else
                                  <td scope="row" class="text-center"><a href="/file/download/{{$order->result}}">Download</a></td>
                                @endif

                                @if($order->raw_data === null)
                                  <td scope="row" class="text-center"><p class="badge badge-light">pending!</p></td>
                                @else
                                  <td scope="row" class="text-center"><a href="/rawdata/download/{{$order->raw_data}}">Download</a></td>
                                @endif

                                <td scope="row" class="text-center"> 
                                  @if($order->accept_order === 0)
                                    <p class="badge badge-secondary">pending</p>
                                  @elseif($order->accept_order === 1)
                                    <p class="badge badge-info">accepted</p>
                                  @elseif($order->accept_order === 2)
                                    <p class="badge badge-danger">rejected</p>
                                  @else 
                                    <p class="badge badge-warning">not specified</p>
                                  @endif 
                                </td> 

                                <td scope="row" class="text-center">
                                    <a href="{{ route('my-orders.show', $order->id) }}" class="btn btn-outline-primary btn-sm">
                                      <i class="fa fa-eye">view</i>
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
                                <td><strong></strong></td>
                                <td><strong></strong></td>
                                <td><strong></strong></td>
                                <td><strong></strong></td>
                                <td><strong></strong></td>
                                <td><strong></strong></td>
                                <td><strong></strong></td>
                                <!-- <td><strong></strong></td> -->
                            </tr>
                        </tfoot>
                      </table>
                      <ul class="pagination">
                          {{ $orders->links() }}
                      </ul>
                    @else
                      <h3>You haven't placed any orders yet!</h3>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
