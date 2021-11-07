@extends('layouts.back.template')

@section('content')
<div class="right_col " role="main" id="main-container">
    <h3 class="text-center mb-5" style="color: #e74c3c">Product {{ $product->name }}</h3>
    <div class="row d-flex justify-content-center align-items-center">
        <div class="col-lg-8">
            <img src="{{ asset('images/products/'.$product->image) }}" alt="" height="560" width="560">
        </div>
        <div class="col-lg-4">
            <p>Name : <span style="color: #f39c12">{{ $product->name }}</span></p><br>
            <p>Price : <span style="color: #f39c12">$ {{ $product->price }} </span></p><br>
            <p>Category : <span style="color: #f39c12">{{ $product->Category->name }}</span></p><br>
            <p>Description : <span style="color: #f39c12">{{ $product->description }}</span></p>
        </div>
    </div>
</div>
@endsection