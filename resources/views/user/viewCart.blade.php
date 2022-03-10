<br>
<div class="container">
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Product Name</th>
                <th scope="col">Quantity</th>
                <th scope="col">Total</th>
            </tr>
        </thead>
        <tbody>
            @php
            $i=0;
            @endphp
            @if(Session::has('cart'))

            @foreach($products as $product)
            <tr>
                <th scope="row">{{$i+=1}}</th>
                <td>{{$product['item']['name']}}</td>
                <td>{{$product['qty']}}</td>
                <td>RM {{$product['price']}}</td>
            </tr>

            @endforeach
            @endif
            <tr>
                <td colspan="3" style="text-align:right">SubTotal</td>
                <td>RM {{$totalPrice}}</td>
            </tr>
        </tbody>
    </table>
    <a href="/checkout">
        <button type=" button" class="btn btn-success btn-lg" style=" position:absolute; right:270px;">Check
            Out</button></a>
</div>

<style>
    .w-5 {
        display: none
    }
</style>