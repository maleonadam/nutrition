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
                    <h3><i class="fa fa-bar-chart"></i> <strong>All Orders</strong></h3>
                    <p><b><a href="{{ route('allproducts') }}">Products</a></b> <i class="fa fa-chevron-right fa-sm"></i>
                  <b>All Orders</b></p>
                </div>

                <div class="card-body"> 
                    <form class="mgBot10" method="POST" action="{{ url('search-orders') }}">
                        @csrf
                          <div class="form-row align-items-center">
                            <div class="col-md-11 mb-2"> 
                              <input type="text" class="form-control" name="search" placeholder="Search order, use order number">
                            </div>  
                            <div class="col-auto mb-2">
                              <button type="submit" class="btn btn-success">Search</button>
                            </div>
                          </div>
                    </form>

                    @if($orders->count() > 0)
                      <div class="row">
                        <div class="col-12 table-responsive">
                          <table class="table table-bordered table-sm table-hover"> 
                            <thead class="thead-light">
                              <tr>
                                <th scope="col">Order no.</th>
                                <!-- <th scope="col" class="text-center">Placed on</th>
                                <th scope="col" class="text-center">Placed by</th> -->
                                <th scope="col" class="text-center">Status</th>
                                <th scope="col" class="text-center">Budget</th>
                                <th scope="col" class="text-center">Invoice</th>
                                <th scope="col" class="text-center">Payment receipt</th>
                                <th scope="col" class="text-center">Service specification</th>
                                <th scope="col" class="text-center">Signed service specification</th>
                                <th scope="col" class="text-center">Results</th> 
                                <th scope="col" class="text-center">Assaws</th>
                                <th scope="col" class="text-center">Action</th>
                              </tr>
                            </thead>

                            <tbody>
                              @foreach($orders as $order)
                              <tr>
                                  <td scope="row">
                                    {{ $order->order_number }} 
                                  </td>

                                  <!-- <td scope="row" class="text-center">  
                                    {{ $order->created_at->toFormattedDateString() }}
                                  </td>
                                  <td scope="row" class="text-center">  
                                    {{ $order->user->name }}
                                  </td> -->
                                  
                                  <td scope="row" class="text-center"> 
                                    @if($order->order_status_id === 1)
                                      <p class="badge badge-light">submitted</p>
                                    @elseif($order->order_status_id === 2)
                                      <p class="badge badge-info">received</p>
                                    @elseif($order->order_status_id === 3)
                                      <p class="badge badge-warning">processing</p>
                                    @else 
                                      <p class="badge badge-success">completed</p>
                                    @endif 
                                  </td>

                                  @if($order->budget === null)
                                    <td scope="row" class="text-center">
                                      <a href="{{ route('all-orders.budget', $order->id) }}" class="btn btn-outline-warning btn-sm">
                                        <i class="fa fa-upload">upload</i>
                                      </a> 
                                    </td>
                                  @else
                                    <td scope="row" class="text-center"><a href="/budget/download/{{$order->budget}}">{{ $order->budget }}</a></td>
                                  @endif

                                  @if($order->invoice === null)
                                    <td scope="row" class="text-center">
                                      <a href="{{ route('all-orders.invoice', $order->id) }}" class="btn btn-outline-warning btn-sm">
                                        <i class="fa fa-upload">upload</i>
                                      </a> 
                                    </td>
                                  @else
                                    <td scope="row" class="text-center"><a href="/invoice/download/{{$order->invoice}}">{{ $order->invoice }}</a></td>
                                  @endif
                                  
                                  @if($order->payment_proof === null)
                                    <td scope="row" class="text-center"><p class="badge badge-light">pending!</p></td>
                                  @else
                                    <td scope="row" class="text-center"><a href="/payment/download/{{$order->payment_proof}}">Download</a></td>
                                  @endif

                                  @if($order->service_speci === null)
                                    <td scope="row" class="text-center">
                                      <a href="{{ route('all-orders.service', $order->id) }}" class="btn btn-outline-warning btn-sm">
                                        <i class="fa fa-upload">upload</i>
                                      </a> 
                                    </td>
                                  @else
                                    <td scope="row" class="text-center"><a href="/service/download/{{$order->service}}">{{ $order->service_speci }}</a></td>
                                  @endif

                                  @if($order->signed_service_speci === null)
                                    <td scope="row" class="text-center"><p class="badge badge-light">pending!</p></td>
                                  @else
                                    <td scope="row" class="text-center"><a href="/signed/download/{{$order->signed_service_speci}}">Download</a></td>
                                  @endif

                                  @if($order->result === null)
                                    <td scope="row" class="text-center">
                                      <a href="{{ route('all-orders.results', $order->id) }}" class="btn btn-outline-warning btn-sm">
                                        <i class="fa fa-upload">upload</i>
                                      </a>
                                    </td>
                                  @else
                                    <td scope="row" class="text-center"><a href="/file/download/{{$order->result}}">{{ $order->result }}</a></td>
                                  @endif

                                  @if($order->raw_data === null)
                                    <td scope="row" class="text-center">
                                      <a href="{{ route('all-orders.rawdata', $order->id) }}" class="btn btn-outline-warning btn-sm">
                                        <i class="fa fa-upload">upload</i>
                                      </a>
                                    </td>
                                  @else
                                    <td scope="row" class="text-center"><a href="/rawdata/download/{{$order->raw_data}}">{{ $order->raw_data }}</a></td>
                                  @endif

                                  <td scope="row" class="text-center">
                                      <a href="{{ route('all-orders.show', $order->id) }}" class="btn btn-outline-primary btn-sm">
                                        <i class="fa fa-eye">view</i>
                                      </a> 
                                      <a href="{{ route('all-orders.edit', $order->id) }}" class="btn btn-outline-success btn-sm">
                                        <i class="fa fa-edit">edit</i>
                                      </a>
                                      <a href="{{ route('all-orders.getreject', $order->id) }}" class="btn btn-outline-danger btn-sm">
                                        <i class="fa fa-ban">reject</i>
                                      </a>
                                      <!-- <a href="#" class="btn btn-outline-danger btn-sm disabled">
                                        <i class="fa fa-trash">del</i>
                                      </a>  -->
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
                                </tr>
                            </tfoot>
                          </table>
                          <ul class="pagination">
                              {{ $orders->links() }}
                          </ul>
                        </div>
                      </div>
                    @else
                      <div class=" row col-12">
                        <h3>There are no orders to display!</h3>
                        <div class="mb-5"></div>
                      </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
