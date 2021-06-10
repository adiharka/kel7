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
        
        <form class="container-child" method="POST" action="{{ route('login') }}">
            @csrf
            <div class="back">
                <a href="user - home page.html">
                    <img src="Asset/panah back.png" alt="">
                </a>
                <h1 align="center">LOGIN</h2>
            </div>
            <h3 align="center">Don't have an account? <a href="user - form regist.html">Regist</a></h3>
            <h3 align="center" class="clickable">
                
            </h3>
            <div class="form-group">
                <label for="email">Email</label><br>
                <input type="email" id="email" name="email" placeholder=" Email" required autofocus>
            </div>
            <div class="form-group">
                <label for="password">Password</label><br>
                <input type="password" id="password" name="password" placeholder=" Password" required>
            </div>
            <div class="input-button"><br>
                <button type="submit">
                    {{-- <a href="user - menu product.html"> --}}
                        <input type="button" value="LOGIN"></button>
                    {{-- </a> --}}
                </button>
            </div>
        </form>
    </div>
    <div class="gambar">
        <img src="Asset/Pharmacist-cuate 1.png">
    </div>
</body>
</html>