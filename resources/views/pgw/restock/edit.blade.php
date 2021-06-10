<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restock Product</title>
    <link rel="stylesheet" href="{{ asset('style-form pegawai.css')}}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&family=Poppins&display=swap" rel="stylesheet">
</head>
<body>
    <div class="navigation flex-column">
        <div class="logo flex-column">
            <div class="back">
                <a href="pgw - menu product.html">
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
                    <a href="pgw - menu pegawai.html">Pegawai</a>
                </h3>
                <h3>
                    <a href="pgw - menu product.html" class="active">Product</a>
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
                <h2>Restock Product</h2>
            </div>
            <div class="form-group">
                <label for="purchadeID">Purchase ID</label><br>
                <input type="text" id="purchaseID" name="purchaseID" placeholder=" Purchase ID" required>
            </div>
            <div class="form-group">
                <label for="purchaseDate">Purchase Date</label><br>
                <input type="date" id="purchaseDate" name="purchaseDate" required>
            </div>
            <div class="form-group">
                <label for="productID">Product ID</label><br>
                <input type="text" id="email" name="productID" placeholder="Product ID" required>
            </div>
            <div class="form-group">
                <label for="qty">Qty</label><br>
                <input type="text" id="qty" name="qty" placeholder="Qty" required>
            </div>
            <div class="form-group">
                <label for="totalPurchase">Total</label><br>
                <input type=text id="totalPurchase" name="totalPurchase" placeholder=" Rp." required>
            </div>
            <div class="form-group">
                <label for="supplier">Supplier</label><br>
                <input type="text" id="supllier" name="supplier" placeholder="Supplier">
            </div>
            <div class="form-group">
                <label for="details">Details</label><br>
                <input type="text" id="details" name="details" placeholder=" Details">
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