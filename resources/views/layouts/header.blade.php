<header>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <nav class="navbar navbar-expand-xl navbar-light">
                    <div class="container-fluid">
                        <a href="#" class="navbar-brand"><img height="40px" width="80px" src="{{asset('app/images/logo.png')}}" alt="logo" class="img-fluid" /></a>
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
                        <form method="get">
                            <div class="input-group">
                                <div class="select-style">
                                    <select name="order">
                                        <option class="topshow" value="1">All</option>
                                        <option value="a">Phone</option>
                                        <option value="b">Headphone</option>
                                        <option value="c">Camera</option>
                                        <option value="d">Computer</option>
                                        <option value="e">Watch</option>
                                        <option value="f">Others</option>
                                    </select>
                                </div>
                                <input type="text" name="search" id="search" class="form-control" placeholder="Search Here" />
                                <div class="input-group-addon">
                                    <a href="">
                                        <img src="{{asset('app/images/search.png')}}" width="40px" height="40px" alt="">
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-md-3 cart-login">
                <div class="float-end cart mt-2 float-right">
                    <a href="#">
                        <span class="number">10</span>
                        <img class="img-fluid " src=" {{asset('app/images/cart.png')}} " alt="cart" />
                        <span>Cart</span>
                    </a>
                </div>

                <div class="float-end">
                    <button type="button"  class="btn btn-light mt-2 btn-sm">Login</button>
                </div>
            </div>


        </div>
    </div>
</header>
