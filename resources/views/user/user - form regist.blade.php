<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regist</title>
    <link rel="stylesheet" href="{{ asset('style-regist.css')}}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&family=Poppins&display=swap" rel="stylesheet">
</head>
<body>
    <div class="konten">
        <form class="container-child" method="POST" action="{{ route('register') }}">
            @csrf
            <div class="back">
                <a href="{{ route('index')}}">
                    <img src="{{ asset('Asset/panah back.png')}}" alt="">
                </a>
                <h1 align="center">REGIST</h2>
            </div>
            <h3 align="center">Already have an account? <a href="user - form login.html">Login</a></h3>
            <h3 align="center" class="clickable">
                
            </h3>
            <div class="form-group">
                <label for="name">Nama</label><br>
                <input type="text" id="name" name="name" placeholder=" Nama" required>
            </div>
            <div class="form-group">
                <label for="email">E-Mail</label><br>
                <input type="email" id="email" name="email" placeholder=" example@yahoo.com" required autocomplete="email">
            </div>
            <!-- <div class="form-group">
                <label for="Telephone">Telephone</label><br>
                <input type=text id="telp" name="telp" placeholder=" 08xx-xxxx-xxxx" required>
            </div> -->
            <div class="form-group">
                <label for="password">Password</label><br>
                <input type="password" id="password" name="password" placeholder=" Password" required>
            </div>
            <div class="form-group">
                <label for="password-confirm">Password</label><br>
                <input type="password" id="password-confirm" name="password_confirmation" placeholder=" Password" required>
            </div>
            <div class="input-button"><br>
                <button style="all:unset">
                    <input type="button">
                </button>
            </div>
        </form>
    </div>
    <div class="gambar">
        <img src="{{ asset('Asset/Pharmacist-cuate 1.png')}}">
    </div>
</body>
</html>