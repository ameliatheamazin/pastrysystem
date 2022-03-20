@extends('layouts.tempadmin')
@section('content')

<br><br>
<div class="container">
    <div class="panel-heading">
        <h3 class="page-title">ORDER LIST</h3><br>
    </div>

    @if(session()->has('message'))
    <div class="alert alert-dismissible alert-primary">
        {{session()->get('message')}}
    </div>
    @php
    Session::forget('message');
    @endphp
    @endif
    <br>

    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">No </th>
                <th scope="col">Order_ID</th>
                <th scope="col">Customer Name</th>
                <th scope="col">Delivery Address</th>
                <th scope="col">Delivery Status</th>
                <th scope="col">Total Cost (RM)</th>
            </tr>
        </thead>

        <tbody>

            @if(count($orders) > 0)

            @foreach ($orders as $i => $order)

            <tr>
                <th class="table-text" scope="row">
                    <div>{{ $i+1 }}</div>
                </th>

                <td class="table-text">
                    <div>
                        <a href={{"/admin/order/".$order->id}}>{{$order-> id}}</a>
                    </div>
                </td>

                <td class="table-text">
                    <div>
                        {{ $order->user->name }}
                    </div>
                </td>

                <td class="table-text">
                    <div>
                        {{ $order-> delivery_address }}
                    </div>
                </td>

                <td class="table-text">
                    <div>
                        {{ $order->status }}
                    </div>
                </td>

                <td class="table-text">
                    <div>
                        {{ number_format($order->total_price, 2) }}
                    </div>
                </td>

                <td>
                    <div>
                        <a href={{"/admin/order/".$order->id."/edit"}} class="btn btn-warning">
                            Edit
                        </a>
                    </div>
                </td>
            </tr>
            @endforeach

            @else
            <tr>
                <td colspan=5 style="padding:20px;text-align:center">No record found</td>
            </tr>
            @endif

        </tbody>

    </table>
</div>

@endsection