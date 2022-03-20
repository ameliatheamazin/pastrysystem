@extends('layouts.tempadmin')
@section('content')

<br><br>
<div class="content">
    <div class="panel-heading">
        <h3 class="page-title">Product Details</h3><br>
    </div>

    <p style="margin:0px 25px 0px;">
        <a href="/admin/product" style="text-decoration:none; text-shadow:2px 2px 3px; font-size:17px">
            &larr; Back
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
                            <th>Product Image</th>
                            <td class="productrow">
                                <img src="/storage/products/{{$product['image_file']}}" class="img-fluid"
                                    alt="Product Image" style="height:30%; width:30%">
                            </td>
                        </tr>
                        <tr>
                            <th>Product ID</th>
                            <td style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif">{{
                                $product->id }}
                            </td>
                        </tr>
                        <tr>
                            <th>Product Name</th>
                            <td class="productrow">{{ $product->name }}</td>
                        </tr>
                        <tr>
                            <th>Product Price</th>
                            <td class="productrow">{{ $product->price }}</td>
                        </tr>

                        <tr>
                            <th>Product Description</th>
                            <td class="productrow">{{ $product->description }}</td>
                        </tr>


                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<style>
    .productrow {
        font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    }
</style>

@endsection