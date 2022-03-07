@extends('layouts.tempadmin')
@section('content')

<br><br>
<div class="content">
    <div class="panel-heading">
        <h3 class="page-title">ORDER DETAILS</h3><br>
    </div>

    <p style="margin:0px 25px 0px;">
        <a href="/admin/order" style="text-decoration:none; text-shadow:2px 2px 3px; font-size:17px">
            &larr; Back
        </a>
        <a href={{"/admin/order/".$order->id."/edit"}} class="editOrder">
            Edit
        </a>
    </p>
    <div class="panel-body">
        <div style="background:hsla(26, 83%, 93%, 0.562); padding:20px; margin:10px;">
            <div class="row">
                <table class="table table-striped task-table">
                    <thead>
                        <tr>
                            <th class="col-sm-3" style="color:rgba(63, 56, 56, 0.781)">Information</th>
                            <th style="color:rgba(63, 56, 56, 0.781)">Details</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <th>Order ID</th>
                            <td style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif">{{
                                $order->id }}
                            </td>
                        </tr>
                        <tr>
                            <th>Customer</th>
                            <td class="orderRow">{{ $order->user->name }}</td>
                        </tr>
                        <tr>
                            <th>Customer Email</th>
                            <td class="orderRow">{{ $order->user->email }}</td>
                        </tr>

                        <tr>
                            <th>Order Date</th>
                            <td class="orderRow">{{ $order->order_date }}</td>
                        </tr>

                        <tr>
                            <th>Delivery Address</th>
                            <td class="orderRow">{{ $order->delivery_address }}</td>
                        </tr>

                        <tr>
                            <th>Orders</th>
                            <td class="orderRow">
                                @foreach ($products as $i => $product)
                                <div>
                                    {{ $product->name }} x {{ $product->pivot->quantity }}
                                    = RM {{$product->pivot->quantity * $product->price}}
                                </div>
                                @endforeach
                            </td>
                        </tr>
                        <tr>
                            <th>Total Price (RM)</th>
                            <td class="orderRow">{{ $order->total_price }}</td>
                        </tr>


                        <tr>
                            <th>Delivery Status</th>
                            <td class="orderRow">{{ $order->status }}</td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<style>
    .editOrder {
        text-decoration: none;
        text-shadow: 2px 2px 3px;
        font-size: 17px;
        margin-left: 1130px;
        box-shadow: inset 0 0 0 0 var(--link-1);
        transition: color 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
    }

    .editOrder:hover {
        color: rgb(13, 82, 82);
        box-shadow: inset 100px 0 0 0 var(--link-1);
    }

    .orderRow {
        font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    }
</style>

@endsection