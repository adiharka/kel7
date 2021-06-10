<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regist</title>
    <link rel="stylesheet" href="style-regist.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&family=Poppins&display=swap" rel="stylesheet">
</head>
<body>
    <div class="konten">
        <form class="container-child">
            <div class="back">
                <a href="user - home page.html">
                    <img src="Asset/panah back.png" alt="">
                </a>
                <h1 align="center">REGIST</h2>
            </div>
            <h3 align="center">Already have an account? <a href="user - form login.html">Login</a></h3>
            <h3 align="center" class="clickable">
                
            </h3>
            <div class="form-group">
                <label for="Username">Username</label><br>
                <input type="text" id="username" name="username" placeholder=" Username" required>
            </div>
            <div class="form-group">
                <label for="email">E-Mail</label><br>
                <input type="email" id="email" name="email" placeholder=" example@yahoo.com" required>
            </div>
            <!-- <div class="form-group">
                <label for="Telephone">Telephone</label><br>
                <input type=text id="telp" name="telp" placeholder=" 08xx-xxxx-xxxx" required>
            </div> -->
            <div class="form-group">
                <label for="password">Password</label><br>
                <input type="password" id="password" name="password" placeholder=" Password" required>
            </div>
            <div class="input-button"><br>
                <a href="user - form login.html">
                    <input type="button" value="REGIST"></button>
                </a> 
            </div>
        </form>
    </div>
    <div class="gambar">
        <img src="Asset/Pharmacist-cuate 1.png">
    </div>
</body>
</html>