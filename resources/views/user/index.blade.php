<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="{{ asset('styles.css')}}">
</head>
<body>
   <nav>
       <div class="wrapper">
            <div class="logo"><img src="{{ asset('Asset/logo.png')}}" alt=""></div>
                <div class="menu">
                    <ul>
                        <li><a href="#dashboar">DASHBOARD</a></li>
                         <li><a href="">KATALOG</a></li>
                         @if (Auth::check())
                            @if (Auth::user()->role == 'user')
                            <li><a href="{{ route('user.product.index')}}"class="tbl-masuk">Dashboard</a></li>
                            @else
                            <li><a href="{{ route('pgw.pgw.index')}}"class="tbl-masuk">Dashboard Pegawai</a></li>
                            @endif
                         @else
                         <li><a href="{{ route('login')}}"class="tbl-masuk">DAFTAR</a></li>
                         @endif
                    </ul>
                </div>
        </div>
   </nav>
   <div class="wrapper">
       <section id="home">
           <div class="gambar">
            <img src="{{ asset('Asset/Pharmacist-amico 3.svg')}}" alt="">
           </div>
           <div class="kolom">
            <div class="logo2"><img src="{{ asset('Asset/logo.png')}}" alt=""></div>
            <h1>Pharmacy merupakan sebuah</h1>
            <h2>website mengenai apotek</h2>
            <h2>ternama yang menjual</h2>
            <h2>berbagai jenis obat.</h2>
            <!-- <p><a href="user-katalog.html"class="tbl-telusuri">TELUSURI</a></p> -->
           </div>
       </section>
   </div>
</body>
</html>
