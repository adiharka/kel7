<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage Pegawai</title>
    <link rel="stylesheet" href="css/style-menu.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&family=Poppins&display=swap" rel="stylesheet">
</head>
<body>
    <div class="navigation flex-column">
        <div class="logo flex-column">
            <img src="Asset/letter_p_PNG119 1.svg" alt="">
            <h1>harmacy</h1>
        </div>
        <div class="menu flex-column">
            <img src="Asset/gg_menu-grid-o.png" alt="">
            <img src="Asset/clarity_notification-outline-badged.png" alt="">
            <img src="Asset/emojione_shopping-cart (1).png" alt="">
        </div>
    </div>
    <div class="container">
        <div class="navbar-samping flex-column">
            <div class="menu-samping flex-column">
                <div class="account flex-column">
                    <div class="navbar-icon">
                        <img src="Asset/ic_round-account-circle.png" alt="">
                    </div>
                    <h3>admin</h3>
                </div>
                <h3>
                    <a href="/" class="active">Pegawai</a>
                </h3>
                <h3>
                    <a href="pgw - menu product.html">Product</a>
                </h3>
                <h3>
                    <a href="pgw - menu pesanan.html">Pesanan</a>
                </h3>
                <h3>
                    <a href="pgw - menu delivery.html">Delivery</a>
                </h3>
            </div>
            <div class="log-out flex-column">
                <h3>
                    <a href="pgw - login.html">Log-Out</a>
                </h3>
                <img src="Asset/feather_log-out.svg" alt="">
            </div>
        </div>
        <form class="container-child">
            <div class="title">
                <h2>Pegawai</h2>
            </div>
            <div class="button-add">
                <a href="/add">
                    <input type="button" value="+ Tambah">
                </a>
            </div>
            </br>
            <h4>Tabel Pegawai Aktif</h4>
            <table border="1" cellpadding="10">
                <tr align="center" style="background-color: rgba(238, 207, 99, 0.4);">
                    <td><b>ID Pegawai</b></td>
                    <td><b>Nama</b></td>
                    <td><b>E-Mail</b></td>
                    <td><b>Alamat</b></td>
                    <td><b>No Telp</b></td>
                    <td><b>Control</b></td>
                </tr>
                @foreach($menupegawai as $pegawai)
                <tr>
                    <td>{{$pegawai->IDPegawai}}</td>
                    <td>{{$pegawai->Nama}}</td>
                    <td>{{$pegawai->Email}}</td>
                    <td>{{$pegawai->Alamat}}</td>
                    <td>{{$pegawai->NoTelp}}</td>
                    <td>
                        <div class="button-control">
                            <div class="button-edit">
                                <a href="pgw - form edit pegawai.html">
                                    <input type="button" value="Edit">
                                </a>
                            </div>
                            <div class="button-delete">
                                <a href="">
                                    <input type="button" value="Hapus">
                                </a>
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach
            </table>
            <h4>Tabel Pegawai Non-Aktif</h4>
            <table border="1" cellpadding="10">
                <tr align="center" style="background-color: rgba(238, 207, 99, 0.4);">
                    <td><b>ID Pegawai</b></td>
                    <td><b>Nama</b></td>
                    <td><b>E-Mail</b></td>
                    <td><b>Alamat</b></td>
                    <td><b>No Telp</b></td>
                    <td><b>Control</b></td>
                </tr>
               
            </table>
        </form>
        <!-- <div class="container-img">
            <img src="Asset/Group 2.png" alt="">
        </div> -->
    </div>
</body>
</html>