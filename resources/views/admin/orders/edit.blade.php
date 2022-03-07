@extends('layouts.tempadmin')
@section('content')

<br><br>
<div class="card border-warning mb-3" style="padding:5px">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="panel-heading">
        <h3 class="card-header">EDIT ORDER</h3><br>
    </div>
    <p><a href="/admin/order" style="text-decoration:none; text-shadow:2px 2px 3px; font-size:17px; margin:10px">
            &larr; Back</a>
    </p>

    <div class="panel panel-default">
        <div class="card-body">
            <form method="POST" action={{'/admin/order/'.$order->id.'/edit'}}>
                @csrf

                {{-- Per row --}}
                <div class="form-group row">
                    <label for="id" class="col-md-4 col-form-label text-md-right">{{ __('Order ID') }}</label>
                    <div class="col-md-6">
                        <input id="id" type="text" class="form-control" name="id" value={{$order->id}} readonly>
                    </div>
                </div><br>

                {{-- Per row --}}
                <div class="form-group row">
                    <label for="order_date" class="col-md-4 col-form-label text-md-right">{{ __('Order Date') }}</label>
                    <div class="col-md-6">
                        <input id="order_date" type="text" class="form-control" value={{$order->order_date}} readonly>
                    </div>
                </div><br>

                {{-- Per row --}}
                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Customer Name') }}</label>
                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control" name="name" value={{$order->user->name}}
                        readonly>
                    </div>
                </div><br>

                {{-- Per row --}}
                <div class="form-group row">
                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Customer Email') }}</label>
                    <div class="col-md-6">
                        <input id="email" type="text" class="form-control" name="email" value={{$order->user->email}}
                        readonly>
                    </div>
                </div><br>

                {{-- Per row --}}
                <div class="form-group row">
                    <label for="delivery_address" class="col-md-4 col-form-label text-md-right">{{ __('Delivery
                        Address') }}</label>
                    <div class="col-md-6">
                        <input id="delivery_address" type="text"
                            class="form-control @error('delivery_address') is-invalid @enderror" name="delivery_address"
                            value="{{$order->delivery_address}}">
                    </div>
                </div><br>

                {{-- Per row --}}
                <div class="form-group row">
                    <label for="status" class="col-md-4 col-form-label text-md-right">{{ __('Delivery status')
                        }}</label>
                    <div class="col-md-6">
                        <select class="form-select" id="status" name="status">
                            <option value="ordered" {{$order->status == "ordered"? 'selected':''}} >ordered</option>

                            <option value="delivered" {{$order->status == "delivered"? 'selected':''}} >delivered
                            </option>

                            <option value="cancelled" {{$order->status == "cancelled"? 'selected':''}} >cancelled
                            </option>
                        </select>
                    </div>
                </div><br>

                {{-- Per row in middle for button--}}
                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Update') }}
                        </button>
                    </div>
                </div><br>
            </form>
        </div>
    </div>
</div>

@endsection