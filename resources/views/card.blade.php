@extends('layouts.master')

@section('content')
    
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container bootdey">
<div class="row bootstrap snippets">
   
   

    <!-- Cart -->
    <div class="col-lg-9 col-md-9 col-sm-12">
        <div class="col-lg-12 col-sm-12">
            <span class="title">SHOPPING CART</span>
        </div>
        <div class="col-lg-12 col-sm-12 hero-feature">
            <div class="table-responsive">
                <table class="table table-bordered tbl-cart">
                    <thead>
                        <tr>
                            <td class="hidden-xs">Image</td>
                            <td>Product Name</td>
                          
                            
                            <td class="td-qty">Quantity</td>
                            <td>Unit Price</td>
                            <td>Sub Total</td>
                            <td>Remove</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                            
                        <tr>
                            <td class="hidden-xs">
                                <a href="#">
                                    <img src=" {{asset('storage/product_images /'.$product->image)}} " alt="" title="" width="47" height="47">
                                </a>
                            </td>
                            <td><a href="#"> {{$product->name}} </a>
                            </td>
                           
                            <td>
                                <div class="input-group bootstrap-touchspin"><span class="input-group-btn"><button class="btn btn-default bootstrap-touchspin-down" type="button">-</button></span><span class="input-group-addon bootstrap-touchspin-prefix" style="display: none;"></span><input type="text" name="" value="1" class="input-qty form-control text-center" style="display: block;"><span class="input-group-addon bootstrap-touchspin-postfix" style="display: none;"></span><span class="input-group-btn"><button class="btn btn-default bootstrap-touchspin-up" type="button">+</button></span></div>
                            </td>
                            <td class="price"> ${{$product->price}} </td>
                            <td>$ 122.21</td>
                            <td class="text-center">
                                <a href=" {{route('removecart',$product->cart_id)}} " class="remove_cart" rel="2">
                                    <i class="fa fa-trash-o"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                        <tr>
                            <td colspan="6" align="right">Total</td>
                            <td class="total" colspan="2"><b>$ 163.47</b>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="btn-group btns-cart">
                <button type="button" class="btn btn-primary"><i class="fa fa-arrow-circle-left"></i> Continue Shopping</button>
                <button type="button" class="btn btn-primary">Update Cart</button>
                <button type="button" class="btn btn-primary">Checkout <i class="fa fa-arrow-circle-right"></i></button>
            </div>

        </div>
    </div>
    <!-- End Cart -->
</div>
</div>

@endsection