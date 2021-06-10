<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <link rel="stylesheet" href="css/style-formpegawai.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&family=Poppins&display=swap" rel="stylesheet">
</head>
<body>
    <div class="navigation flex-column">
        <div class="logo flex-column">
            <div class="back">
                <a href="/">
                    <img src="Asset/panah back.png" alt="">
                </a>
            </div>
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
        <form class="container-child" method="post" action="/" >
            @csrf
            <div class="title">
                <h2>Add Pegawai</h2>
            </div>
            <div class="form-group">
                <label for="idPgw">ID Pegawai</label><br>
                <input type="text" id="idPgw" name="IDPegawai" placeholder=" ID" required>
            </div>
            <div class="form-group">
                <label for="namaPgw">Nama pegawai</label><br>
                <input type="text" id="namaPgw" name="Nama" placeholder=" Nama Lengkap" required>
            </div>
            <div class="form-group">
                <label for="namaPgw">Alamat pegawai</label><br>
                <input type="text" id="namaPgw" name="Alamat" placeholder=" Alamat Lengkap" required>
            </div>
            <div class="form-group">
                <label for="email">E-Mail</label><br>
                <input type="email" id="email" name="Email" placeholder=" example@yahoo.com" required>
            </div>
            <div class="form-group">
                <label for="Telephone">Telephone</label><br>
                <input type=text id="telp" name="NoTelp" placeholder=" 08xx-xxxx-xxxx" required>
            </div>
            <div class="form-group primary-button end"><br>
                <button type="submit">Add</button>
            </div>
        </form>
        <div class="container-img">
            <img src="Asset/Group 2.png" alt="">
        </div>
        
    </div>
</body>
</html>