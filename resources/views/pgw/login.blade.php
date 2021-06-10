<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Pegawai</title>
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- css files -->
    <link rel="stylesheet" href="{{ asset('css/system.css')}}">
    <link rel="stylesheet" href="{{ asset('css/pgw-login.css')}}">
</head>
<body class="flex-column vh100" id="body-center">
    <div class="flex-row header-brand">
        <img src="{{ asset('img/icon/brand-p.svg')}}" alt="brand-logo">
        <span>harmacy</span>
    </div>
    <form class="flex-column container">
        <h1 class="poppins">Selamat Datang, Apoteker!</h1>
        <div class="flex-column montserrat input-label">
            <label for="name">Nama Pengguna</label>
            <input type="text" name="name" id="name" placeholder="Ketik nama pengguna...">
        </div>
        <div class="flex-column montserrat input-label">
            <label for="password">Kata Sandi</label>
            <input type="password" name="password" id="password" placeholder="Ketik passwordmu...">
        </div>
        <div class="flex-row montserrat option-input">
            <div class="flex-row montserrat input-checkbox">
                <input type="checkbox" name="remember" id="remember">
                <label for="remember">Ingatkan saya</label>
            </div>
            <a href="">Reset Kata Sandi?</a>
        </div>
        <div class="input-button"><br>
            <a href="pgw - menu pegawai.html">
                <input type="button" value="Login"></button>
            </a>
        </div>
    </form>
</body>
</html>