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
                <td><a class="btn btn-secondary" href={{"add/".$product['id']}}>+</a>
                    &nbsp;&nbsp;{{$product['qty']}}&nbsp;&nbsp;
                    <a class="btn btn-secondary" href={{"deduct/".$product['id']}}>-</a>
                </td>
                <td>RM {{$product['price']*$product['qty']}}</td>
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
            Out</button>

</div>


<style>
.w-5 {
    display: none
}
</style>