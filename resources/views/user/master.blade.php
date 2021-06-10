<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <link rel="stylesheet" href="{{ asset('style-menu user.css')}}">
    <link rel="stylesheet" href="{{ asset('css/catalog.css')}}">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&family=Poppins&display=swap" rel="stylesheet">
</head>
<body>
    <div class="navigation flex-column">
        <div class="logo flex-column">
            <img src="{{ asset('Asset/letter_p_PNG119 1.svg')}}" alt="">
            <h1>harmacy</h1>
        </div>
        <div class="menu flex-column">
            <img src="{{ asset('Asset/gg_menu-grid-o.png')}}" alt="">
            <img src="{{ asset('Asset/clarity_notification-outline-badged.png')}}" alt="">
            <img src="{{ asset('Asset/emojione_shopping-cart (1).png')}}" alt="">
        </div>
    </div>
    <div class="container">
        <div class="navbar-samping flex-column">
            <div class="menu-samping flex-column">
                <div class="account flex-column">
                    <div class="navbar-icon">
                        <img src="{{ asset('Asset/ic_round-account-circle.png')}}" alt="">
                    </div>
                    <h3>{{Auth::user()->name}}</h3>
                </div>
                <h3>
                    <a href="{{ route('user.product.index')}}" id="product">Product</a>
                </h3>
                <h3>
                    <a href="{{ route('user.order.index')}}" id="order">Order</a>
                </h3>
                <h3>
                    <a href="{{ route('user.payment.index')}}" id="payment">Payment</a>
                </h3>
                <h3>
                    <a href="{{ route('user.delivery.index')}}" id="delivery">Delivery</a>
                </h3>
            </div>
            <div class="log-out flex-column">
                <h3>
                    <a href="{{ route('logout')}}">Log-Out</a>
                </h3>
                <img src="{{ asset('Asset/feather_log-out.svg')}}" alt="">
            </div>
        </div>
        @yield('content')

    </div>
</body>
</html>
