<br><br>
@php
$states=array("Johor","Kedah","Kelantan","Kuala Lumpur");
$onlineBankingOptions=array("CIMB Clicks","RHB Online","PBE");
@endphp


<form>
    <fieldset>
        <legend>Shipping Information</legend>
        <div class="row">
            <div class="col">
                <input type="text" class="form-control" placeholder="First name" aria-label="First name">
            </div>
            <div class="col">
                <input type="text" class="form-control" placeholder="Last name" aria-label="Last name">
            </div>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1" class="form-label mt-4">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1" class="form-label mt-4">Phone Number</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="eg: 01983991034">
        </div>
        <div class="form-group">
            <label for="addressLine" class="form-label mt-4">Shipping Address</label>
            <input type="text" class="form-control mb-2" id="addressLine1" placeholder="Address line 1">
            <input type="text" class="form-control mb-2" id="addressLine2" placeholder="Address line 2 (optional)">
        </div>

        <div class="row g-3">
            <div class="col-sm-7">
                <input type="text" class="form-control" placeholder="City" aria-label="City">
            </div>
            <div class="col-sm">
                <select class="form-select" id="exampleSelect1">
                    @foreach ($states as $state)
                    <option>{{$state}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-sm">
                <input type="text" class="form-control" placeholder="postcode">
            </div>
        </div>

        <div class="form-group">
            <label for="remarks" class="form-label mt-4">Remark</label>
            <textarea class="form-control" id="remarks" rows="3" placeholder="Add a remark ..."></textarea>
        </div>
        <fieldset class="form-group">
            <legend class="mt-4">Payment Method</legend>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="radio" class=" form-check-input" name="optionsRadios" id="onlineBanking"
                        value="onlineBanking" checked>
                    Online Banking (FPX)
                </label>
                <span id="selectBank">
                    <select class="form-select">
                        @foreach ($onlineBankingOptions as $bankOption)
                        <option>{{$bankOption}}</option>
                        @endforeach
                    </select>
                </span>
            </div>
            <div class="form-check mt-2">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="optionsRadios" value="cod" data-toggle="collapse"
                        data-target="#collapseExample.show">Cash on Delivery (CoD)
                </label>
            </div>

        </fieldset>
        <div class="d-grid gap-2 mt-4">
            <button type=" button" class="btn btn-primary">Place My
                Order</button>
        </div>




</form>