<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katalog User</title>
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- css files -->
    <link rel="stylesheet" href="{{ asset('css/system.css')}}">
    <link rel="stylesheet" href="{{ asset('css/header.css')}}">
    <link rel="stylesheet" href="{{ asset('css/navigation.css')}}">
    <link rel="stylesheet" href="{{ asset('css/catalog.css')}}">
</head>
<body class="flex-column vh100">
    <img src="img/illust-katalog.svg" alt="" class="illust">
    <header class="flex-row header-bar">
        <div class="flex-row header-brand">
            <img src="img/icon/brand-p.svg" alt="brand-logo">
            <span>harmacy</span>
        </div>
        <div class="flex-row header-activity">
            <form action="" method="GET" class="flex-row montserrat search-box">
                <input type="text" name="search" id="search" placeholder="Cari obat yang dibutuhkan">
                <button type="submit"><img src="img/icon/search.svg" alt=""></button>
            </form>
            <a href="" class="flex-row"><img src="img/icon/cart.svg" alt=""></a>
        </div>
    </header>
    <div class="flex-row container">
        <nav class="flex-column nav-side">
            <div class="flex-column montserrat nav-link">
                <div class="flex-column montserrat profile-user">
                    <img src="img/icon/profile-user.svg" alt="">
                    <h6>User</h6>
                </div>
                <span>Product</span>
                <a href="user - menu form order.html">Pemesanan</a>
                <a href="user - menu payment.html">Pembayaran</a>
                <a href="user - menu delivery.html">Pengiriman</a>
            </div>
            <form action="user - home page.html" method="GET">
                <button class="montserrat flex-row" type="submit">Keluar <img src="img/icon/log-out.svg" alt=""></button>
            </form>
        </nav>
        <div class="flex-column catalog">
            <h1 class="poppins">Katalog Obat</h1>
            <div class="flex-row list-product">
                <div class="flex-column product">
                    <div class="flex-row product-photo">
                        <img src="img/photo/product-1.png" alt="">
                    </div>
                    <div class="flex-column poppins product-description">
                        <h2>METFORMIN 500MG</h2>
                        <p>Per Box (100 Tablet)</p>
                        <span>Rp 19.000</span>
                    </div>
                    <button onclick="location.href='user - menu form order.html'" type="button" class="poppins">TAMBAH</button>
                </div>
                <div class="flex-column product">
                    <div class="flex-row product-photo">
                        <img src="img/photo/product-2.png" alt="">
                    </div>
                    <div class="flex-column poppins product-description">
                        <h2>CANDESARTAN 32MG</h2>
                        <p>Per Box (30 Tablet)</p>
                        <span>Rp 25.200</span>
                    </div>
                    <button onclick="location.href='user - menu form order.html'" type="button" class="poppins">TAMBAH</button>
                </div>
                <div class="flex-column product">
                    <div class="flex-row product-photo">
                        <img src="img/photo/product-3.png" alt="">
                    </div>
                    <div class="flex-column poppins product-description">
                        <h2>ATORVASTATIN 20MG</h2>
                        <p>Per Box (30 Tablet)</p>
                        <span>Rp 96.300</span>
                    </div>
                    <button onclick="location.href='user - menu form order.html'" type="button" class="poppins">TAMBAH</button>
                </div>
                <div class="flex-column product">
                    <div class="flex-row product-photo">
                        <img src="img/photo/product-4.png" alt="">
                    </div>
                    <div class="flex-column poppins product-description">
                        <h2>SIMVASTATIN 20MG</h2>
                        <p>Per 3 Strip</p>
                        <span>Rp 16.800</span>
                    </div>
                    <button onclick="location.href='user - menu form order.html'" type="button" class="poppins">TAMBAH</button>
                </div>
                <div class="flex-column product">
                    <div class="flex-row product-photo">
                        <img src="img/photo/product-3.png" alt="">
                    </div>
                    <div class="flex-column poppins product-description">
                        <h2>ATORVASTATIN 20MG</h2>
                        <p>Per Box (30 Tablet)</p>
                        <span>Rp 96.300</span>
                    </div>
                    <button type="button" class="poppins">TAMBAH</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>