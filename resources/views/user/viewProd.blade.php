<br>
<div class="container">
    <div class="row row-cols-1 row-cols-md-2 row row-cols-3 row-cols-md-4">
        @if(count($products)>0)
        @foreach($products as $prod)
        <div class="col mb-4">
            <div class="card">
                <h3 class="card-header" style="font-size:18px; height:35px; text-align:center; color:black ">
                    {{$prod['name']}}</h3>
                <div class="card-body" style="height:250px">
                    <img src="{{$prod['image_file']}}" class="img-fluid" alt="Product Image"
                        style="height:100%; width:100%">
                </div>
                <div class="card-body" style="height: 80px">
                    <p class="card-text">{{$prod['description']}}</p>
                </div>
                <div class="card-body">
                    <p style="font-size:18px">RM {{$prod['price']}}.00</p>
                </div>
                <div class="card-footer">
                    <a href={{"addToCart/".$prod['id']}} class="card-link">Add to Cart</a>

                </div>
            </div>
        </div>
        @endforeach
        @endif
    </div>
</div>


<style>
.w-5 {
    display: none
}
</style>