@extends('layouts.master')

@section('content')
    	
	<div class="container">
		<div class="card">
			<div class="container-fliud">
				<div class="wrapper row">
					<div class="preview col-md-6">
						
						<div class="preview-pic tab-content">
						  <div class="tab-pane active" id="pic-1"><img width="240px" height="400px" src="{{asset('storage/product_images /'.$product->image)}}"style="object-fit:fill" /></div>
						  <div class="tab-pane" id="pic-2"><img src="http://placekitten.com/400/252" /></div>
						  <div class="tab-pane" id="pic-3"><img src="http://placekitten.com/400/252" /></div>
						  <div class="tab-pane" id="pic-4"><img src="http://placekitten.com/400/252" /></div>
						  <div class="tab-pane" id="pic-5"><img src="http://placekitten.com/400/252" /></div>
						</div>
						
						
					</div>
					<div class="details col-md-6">
						<h3 class="product-title"> {{$product->name}} </h3>
						<div class="rating">
							<div class="stars">
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
							</div>
							<span class="review-no">41 reviews</span>
						</div>
						<p class="product-description"> {{$product->description}} </p>
						<h4 class="price">current price: <span> ${{$product->price}} </span></h4>
						<p class="vote"><strong>91%</strong> of buyers enjoyed this product! <strong>(87 votes)</strong></p>

						<div class="action">
							<button class="add-to-cart btn btn-default" type="button">add to cart</button>
						
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
  
@endsection