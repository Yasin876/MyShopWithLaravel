@extends('layouts.master')
@section('content')

<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
<div class="container bootstrap snippets bootdey">
    <hr>
    <ol class="breadcrumb">
        <li><a href="#" >Page name</a></li>
        <li><a href="#">Search Results</a></li>
        <li class="pull-right"><a href="" class="text-muted"><i class="fa fa-refresh"></i></a></li>
    </ol>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="well search-result">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search">
                    <span class="input-group-btn">
              <button class="btn btn-info btn-lg" type="button">
                        <i class="glyphicon glyphicon-search"></i>
                        Search
                    </button>
            </span>
                </div>
            </div>
            @if($products->isNotEmpty())
                @foreach($products as $product)
                <div class="well search-result">
                    <div class="row">
                        <a href=" {{route('productdetail',['id'=>$product->id])}} ">
                            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-2">
                                <img class="img-responsive" src="{{asset('storage/product_images /'.$product->image)}}" alt="">
                            </div>
                            <div class="col-xs-6 col-sm-9 col-md-9 col-lg-10 title">
                                <h3>{{$product->name}}</h3>
                                <p>{{$product->description}}</p>
                            </div>
                        </a>
                    </div>
                </div>
                @endforeach
            @else
                <h2 class="my-2">No found any product</h2>
            @endif

           @if($products->isNotEmpty())
                <div class="row">
                    <button type="button" class="btn btn-info  btn-block">
                        <i class="glyphicon glyphicon-refresh"></i>Load more...
                    </button>
                </div>
           @endif
        </div>
    </div>
</div>

@endsection
