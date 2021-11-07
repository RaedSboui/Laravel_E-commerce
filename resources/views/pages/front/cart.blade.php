@extends('layouts.front.template')

@section('content')
@if (Cart::count() >0)
    <!-- breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Checkout Page</li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

<!-- checkout -->
	<div class="checkout">
		<div class="container">
			<h3 class="animated wow slideInLeft" data-wow-delay=".5s">Your shopping cart contains: <span>{{ Cart::content()->count() }} Products</span></h3>
			<div class="checkout-right animated wow slideInUp" data-wow-delay=".5s">
				<table class="timetable_sub">
					<thead>
						<tr>	
							<th>Image</th>
							<th>Amount</th>
							<th>Product Name</th>
							<th>Price</th>
							<th>Remove</th>
						</tr>
					</thead>
                    <tbody>
                        @foreach ($cartItems as $item)
					    <tr class="rem3">
						    <td class="invert-image">
								<a href="">
								    <img src="{{ asset('images/products/'.$item->options->image) }}" alt=" " class="rounded" width="50" height="50"/>
								</a>
							</td>
						    <td class="invert">
                                <form action="{{ route('cart.update') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="rowId" value="{{ $item->rowId}}" >
                                    <input type="number" name="quantity" value="{{ $item->quantity }}" class="w-6 text-center bg-gray-300" />
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </form>
                            </td>
						    <td class="invert">{{ $item->name }}</td> <!-- Product name -->
						    <td class="invert">${{ $item->price }}</td> <!-- Product price -->
						    <td class="invert">
							    <div class="rem">
                                    <form action="{{ route('cart.remove') }}" method="POST">
                                        @csrf
                                        <input type="hidden" value="{{ $item->rowId }}" name="rowId">
                                        <button class="btn btn-danger">x</button>
                                    </form>
							    </div>
						    </td>
					    </tr>
                        @endforeach
                    </tbody>
				</table>
			</div>
			<div class="checkout-left">	
				<div class="checkout-left-basket animated wow slideInLeft" data-wow-delay=".5s">
					<h4>Continue to basket</h4>
					<ul>
						@foreach ($cartItems as $item)
						<li>{{ $item->name }} <span>$ {{ $item->price }} </span></li>
						@endforeach
						<li style="color: #c0392b">Total <span style="color: #f39c12">$ {{ Cart::subtotal() }} </span></li>
					</ul>
				</div>
				<div class="checkout-right-basket animated wow slideInRight" data-wow-delay=".5s">
					<a href="{{ route('cart.shop') }}"><span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>Continue Shopping</a>
				</div>
				<div class="clearfix"> </div>
				<div class="checkout-left-basket animated wow slideInLeft text-center" data-wow-delay=".5s">
					<form action="{{ route('cart.clear') }}" method="POST">
						@csrf
                        <button type="submit" style="background: #e67e22; color:white ;border:none; padding:10px">Empty Cart</button>
					</form>
				</div>
			</div>
		</div>
	</div>
<!-- //checkout -->

@else
    <div class="text-center">
        <p style="color: #f39c12"> Cart is empty!</p>
    </div>
@endif
@endsection