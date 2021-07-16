@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h3>Dashboard...</h3></div>
                <h4>{{$p->fname}} {{$p->lname}}</h4>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Thanks for ordering our packages. Your order details are here.') }}
                </div>

                <h5>Orders</h5>
                                    <table class="table" border="1">
                                        <thead>
                                             <tr>
                                                  <th>Details</th>
                                                  <th>Total</th>
                                             </tr>
                                        </thead>
                                        <tbody class="body-half-screen">
                                             @if(count($orders) > 0)
                                             @foreach($orders as $order)
                                             <tr>
                                                  <td style="text-transform:capitalize">{{$order->details}}</td>
                                                  <td style="text-transform:capitalize">{{$order->total}}</td>
                                             </tr>
                                             @endforeach
                                             @else
                                             <tr>
                                                  <td colspan="7"><h3 style=" text-transform:capitalize; color:black;text-align: center;">No orders Found</h3></td>
                                             </tr>
                                         @endif
                                        </tbody>
                                   </table>
            </div>
        </div>
    </div>
</div>
@endsection
