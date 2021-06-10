<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="{{ asset('style-regist.css')}}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&family=Poppins&display=swap" rel="stylesheet">
</head>
<body>
    <div class="konten">
        
        <form class="container-child">
            <div class="back">
                <a href="pgw - HOMEPAGE.html">
                    <img src="Asset/panah back.png" alt="">
                </a>
                <h1 align="center">LOGIN</h2>
            </div>
            <!-- <h3 align="center">Don't have an account?</h3>
            <h3 align="center" class="clickable">
                <a href="pgw - form regist.html">Regist here</a>
            </h3> -->
            <div class="form-group">
                <label for="Username">Username / ID</label><br>
                <input type="text" id="username" name="username" placeholder=" Username / ID">
            </div>
            <div class="form-group">
                <label for="password">Password</label><br>
                <input type="password" id="password" name="password" placeholder=" Password">
            </div>
            <div class="input-button"><br>
                <a href="pgw - menu pegawai.html">
                    <input type="button" value="Login"></button>
                </a>
            </div>
        </form>
    </div>
    <div class="gambar">
        <img src="{{ asset('Asset/Pharmacist-cuate 1.png')}}">
    </div>
</body>
</html>