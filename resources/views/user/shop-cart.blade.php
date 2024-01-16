
@extends('user.layout.app')
@section('content')
<style>
    .quantity__box {
	text-align: center;
	display: -webkit-box;
	display: -ms-flexbox;
	display: flex
}

.quantity__value {
	display: inline-block;
	border: 1px solid var(--border-color2);
	margin: 0;
	width: 3rem;
	height: 2rem;
	text-align: center;
	padding: 0;
	background: var(--gray-color2);
	cursor: pointer;
	font-size: 1rem;
	font-weight: 500
}

.quantity__value.decrease {
	margin-right: -4px;
	border-radius: 13px 0 0 13px
}

.quantity__value.increase {
	margin-left: -4px;
	border-radius: 0 13px 13px 0
}

input.quantity__number {
	text-align: center;
	border: none;
	border-top: 1px solid var(--border-color2);
	border-bottom: 1px solid var(--border-color2);
	margin: 0;
	width: 3rem;
	height: 2rem
}

input[type=number]::-webkit-inner-spin-button,
input[type=number]::-webkit-outer-spin-button {
	-webkit-appearance: none;
	margin: 0
}
input[type=number] {
	-moz-appearance: textfield;
}
    </style>

                <!--app-content open-->
				<div class="app-content">
					<section class="section">

					    <!--page-header open-->
						<div class="page-header">

							<ol class="breadcrumb"><!-- breadcrumb -->
								<li class="breadcrumb-item"><a href="#"><i class="fe fe-home mr-2"></i> Home </a></li>
								<li class="breadcrumb-item active" aria-current="page"> Shopping Cart </li>
							</ol><!-- End breadcrumb -->
						</div>
						<!--page-header closed-->

						<div class="section-body ">

						    <!--row open-->
							<div class="row">
								<div class="col-lg-6">
									<div class="card m-b-20">
										<div class="card-header ">
											<h4>Shopping Cart</h4>
										</div>
										<div class="card-body">
											<div class="table-responsive text-nowrap">
												<table class="table table-bordered">

													<thead>
														<tr>
															<th>Product</th>
															<th>price</th>
															<th>Quantity</th>
															<th>Total</th>
															<th>Action</th>
														</tr>
													</thead>

													<tbody>
                                                        @foreach ($carts as $cart)
                                                        @php
                                                            $subtotal_cart[] = $cart->product->selling_price * $cart->quantity;
                                                        @endphp
                                                        <tr>
															<td>{{$cart->product->name}}</td>
															<td><span> Rs {{$cart->product->selling_price}} </span></td>
															<td class="w-32 "><div class="quantity__box">
                                                                <button type="button"
                                                                    class="quantity__value quickview__value--quantity decrease"
                                                                    aria-label="quantity value" onclick="productDecreaseCounterAuth({{$cart->id}},{{Auth::user()->id}})" value="Decrease Value">-</button>
                                                                <label>
                                                                    <input type="number"
                                                                        class="quantity__number quickview__value--number"
                                                                        value="{{$cart->quantity}}" data-counter />
                                                                </label>
                                                                <button type="button"
                                                                    class="quantity__value quickview__value--quantity increase"
                                                                    aria-label="quantity value" onclick="productIncreaseCounterAuth({{$cart->id}},{{Auth::user()->id}})" value="Increase Value">+</button>
                                                            </div></td>
															<td> <span class="cart__price end">{{$cart->product->selling_price*$cart->quantity}}</span></td>
															<td><a class="btn btn-danger btn-sm text-white" href="{{url('del/')}}/{{$cart->id}}/session_id/{{$cart->session_id}}" data-original-title="Delete"><i class="fa fa-trash-o"></i></a></td>
														</tr>
                                                        @endforeach

													</tbody>
												</table>
											</div>

										</div>
									</div>
								</div>

								<div class="col-lg-6">
									<div class="card ">
										<div class="card-header ">
											<h4>Order Summery</h4>
										</div>

										<div class="card-body">
											<div class="table-responsive">
												<table class="table table-bordered">
													<tbody>
														<tr>
															<td>Cart Subtotal</td>
															<td class="text-right"> Rs {{(array_sum($subtotal_cart))?array_sum($subtotal_cart):'0'}} </td>
														</tr>
														<tr>
															<td><span>Totals</span></td>
															<td class="text-right text-muted"><span> Rs {{(array_sum($subtotal_cart))?array_sum($subtotal_cart):'0'}} </span></td>
														</tr>
														<tr>
															<td><span>Order Total</span></td>
															<td><h2 class="price text-right"> Rs {{(array_sum($subtotal_cart))?array_sum($subtotal_cart):'0'}} </h2></td>
														</tr>
													</tbody>
												</table>
											</div>

											<form class="text-center" method="post">
                                                @csrf
												<button class="btn btn-primary mt-2" type="submit" >Proceed To Payment</button>
												<a class="btn btn-secondary mt-2" href="{{route('repurchage-products')}}" value="">Continue Shopping</a>
											</form>

										</div>
									</div>
								</div>

							</div>
							<!--row closed-->

						</div>
					</section>
				</div>
				<!--app-content closed-->
@endsection
