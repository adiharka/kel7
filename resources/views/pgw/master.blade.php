<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delivery</title>
    <link rel="stylesheet" href="{{ asset('style-menu.css')}}">
    <link rel="stylesheet" href="{{ asset('style-form pegawai.css')}}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&family=Poppins&display=swap"
        rel="stylesheet">
</head>

<body>
    <div class="navigation flex-column">
        <div class="logo flex-column">
            <div class="back">
                <a href="{{ url()->previous() }}">
                    <img src="{{ asset('Asset/panah back.png')}}" alt="">
                </a>
            </div>
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
                    <a href="{{ route('pgw.pgw.index')}}" id="pegawai">Pegawai</a>
                </h3>
                <h3>
                    <a href="{{ route('pgw.product.index')}}" id="product">Product</a>
                </h3>
                <h3>
                    <a href="{{ route('pgw.pesanan.index')}}" id="pesanan">Pesanan</a>
                </h3>
                <h3>
                    <a href="{{ route('pgw.delivery.index')}}" id="delivery">Delivery</a>
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
