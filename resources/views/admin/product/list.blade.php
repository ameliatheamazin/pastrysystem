@extends('layouts.tempadmin')
@section('content')

<br><br>
<div class="container">
    <div class="panel-heading">
        <h3 class="page-title">PRODUCT LIST</h3><br>
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

    <div>
        <a href={{"/admin/add"}} class="btn btn-success" style="margin:0px 10px 10px">
            Add Product
        </a>
    </div>
    <table class="table table-hover">
        <thread>
            <tr>
                <th scope="col">No </th>
                <th scope="col">Product ID</th>
                <th scope="col">Product Name</th>
                <th scope="col">Product Price</th>
                <th scope="col">Product Description</th>
            </tr>
        </thread>

        <tbody>

            @if(count($products) > 0)

            @foreach ($products as $i => $product)

            <tr>
                <th class="table-text" scope="row">
                    <div>{{ $i+1 }}</div>
                </th>

                <td class="table-text">
                    <div>
                        <a href={{"/admin/product/".$product->id}}>{{$product-> id}}</a>
                    </div>
                </td>

                <td class="table-text">
                    <div>
                        {{ $product->name }}
                    </div>
                </td>

                <td class="table-text">
                    <div>
                        {{ number_format($product-> price,2) }}
                    </div>
                </td>

                <td class="table-text">
                    <div>
                        {{ $product->description }}
                    </div>
                </td>
                <td>
                    <div>
                        <a class="btn btn-danger" style="margin:5px" href={{"/admin/product/".$product->id."/delete"}} >Delete</a>
                    </div>
                </td>

            </tr>
            @endforeach

            @else
            <tr>
                <td colspan=5 style="padding:20px;text-align:center">No product record</td>
            </tr>
            @endif

        </tbody>

    </table>
</div>

@endsection