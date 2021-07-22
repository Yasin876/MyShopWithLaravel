<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> @yield('title') </title>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href=" {{asset('app/css/product.css')}} ">
    <link rel="stylesheet" href=" {{asset('app/css/product-detail.css')}} ">
    <link rel="stylesheet" href=" {{asset('app/css/header.css')}} ">
    <link rel="stylesheet" href=" {{asset('app/css/search.css')}} ">
    <link rel="stylesheet" href=" {{asset('app/css/cart.css')}} ">

</head>
<body>

    {{View::make('layouts.header')}}

        @yield('content')

     {{View::make('layouts.footer')}}

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>



</body>
<!-- page Scripts code -->
    @yield('scripts')
</html>
