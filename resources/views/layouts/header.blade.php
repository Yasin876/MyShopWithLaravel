<?php
   use App\Http\Controllers\CartController;
   $totalCount = CartController::countProduct();
 ?>
<header>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <nav class="navbar navbar-expand-xl navbar-light">
                    <div class="container-fluid">
                        <a href="#" class="navbar-brand"><img height="30px" width="60px" src="{{asset('app/images/logo.png')}}" alt="logo" class="img-fluid" /></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavDropdown">
                            <ul class="navbar-nav mx-auto">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href=" {{route('home')}} ">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Orders</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>

            <div class="col-lg-4 col-md-3">
                <div class="header-search mt-2">
                    <div class="search-form">
                        <form class="form-inline my-2 my-lg-0" method="GET" action="{{route('search')}}">
                            <input class="form-control mr-sm-2" name="search" type="search" placeholder="Search here..." aria-label="Search">
                            <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-md-3 cart-login">
                <div class="float-end cart mt-2 float-right">
                    <a href="#">
                        <span class="number"> {{$totalCount}} </span>
                        <img class="img-fluid " src=" {{asset('app/images/cart.png')}} " alt="cart" />
                        <span>Cart</span>
                    </a>
                </div>

                <div class="float-end">
                    <a href="{{route('login')}}">   <button type="button" class="btn btn-light mt-2 float-left  btn-sm">Login</button> </a>
                </div>

            </div>



        </div>
    </div>
</header>
