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
        <h3 class="card-header">ADD PRODUCT</h3><br>
    </div>
    <p><a href={{"/admin/product"}} style="text-decoration:none; text-shadow:2px 2px 3px; font-size:17px; margin:10px">
            &larr; Back</a>
    </p>

    <div class="panel panel-default">
        <div class="card-body">
            <form method="POST" enctype="multipart/form-data" action={{'/admin/add'}}>
                @csrf


                {{-- Per row --}}
                <div class="form-group row">
                    <label for="id" class="col-md-4 col-form-label text-md-right">{{ __('Product Image') }}</label>
                    <div class="col-md-6">
                         
                        <input id="image_file" type="file" placeholder="Choose image" class="form-control @error('image_file')  @enderror" name="image_file" >
                    </div>
                </div><br>

                {{-- Per row --}}
                <div class="form-group row">
                    <label for="order_date" class="col-md-4 col-form-label text-md-right">{{ __('Product Name') }}</label>
                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"  >
                    </div>
                </div><br>

                {{-- Per row --}}
                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Product Price') }}</label>
                    <div class="col-md-6">
                        <input id="price" type="text" class="form-control @error('price') is-invalid @enderror" name="price" 
                        >
                    </div>
                </div><br>

                {{-- Per row --}}
                <div class="form-group row">
                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Product Description') }}</label>
                    <div class="col-md-6">
                        <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" 
                        >
                    </div>
                </div><br>



                {{-- Per row in middle for button--}}
                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Add') }}
                        </button>
                    </div>
                </div><br>
            </form>
        </div>
    </div>
</div>

@endsection