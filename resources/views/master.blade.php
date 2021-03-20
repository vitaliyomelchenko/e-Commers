<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-Commers</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>
<body>
    {{ View::make('header') }}
        @yield('content')
    {{ View::make('footer') }}
</body>
<style>
    .custom-login{
        height: 590px;
        padding-top: 100px;
    }
    img.slider-img{
        height: 400px !important;
    }
    .custom-product{
        height: 630px;
    }
    .trading-wrapper{
        margin: 50px;
    }
    .trending-image{
        height: 100px;
    }
    .treding-item{
        float: left;
        width: 20%;
    }
    .detail-img{
        height: 400px;
    }
    .search-box{
        width: 500px !important
    }
    .searched-item{
        height: 100px;
    }
    .cart-list-devider{
        border-bottom: 1px solid #cccccc;
        margin-bottom: 5px;
        padding-bottom: 5px;
    }
    .cart-list{
        margin-top: 20px;
    }
    .fix-footer {
    position:fixed;
    bottom:20px;
    }
    .order_now{
        margin-top: 20px;
    }
    .order{
        margin-top: 50px;
        margin-bottom: 20px;
    }
}
</style>
</html>
