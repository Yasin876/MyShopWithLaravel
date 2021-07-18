
 @extends('layouts.master')

 @section('content')

<div class="container bootstrap snipets">
    <h1 class="text-center text-muted">Product catalog</h1>
    <div class="row flow-offset-1">
        @foreach($products as $product)
            <div class="col-xs-6 col-md-4">
                <div class="product tumbnail thumbnail-3"><a href=" {{route('productdetail',['id'=>$product->id])}} "><img src="{{asset('storage/product_images /'.$product->image)}}" width="200px" height="240px" alt=""></a>
                    <div class="caption">
                        <h6><a href="#"> {{$product->name}} </a></h6><span class="price sale"> ${{$product->price}} </span>
                    </div>
                    <button class="btn btn-sm btn-primary mb-2">Add to cart</button>
                </div>
            </div>
        @endforeach

    </div>
  </div>
  @endsection
