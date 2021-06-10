@extends('pgw.master')

@section('content')
<script>
    document.title = 'Edit Product';
    document.getElementById('product').className = 'active';
</script>
        <form class="container-child">
            <div class="title">
                <h2>Edit Product</h2>
            </div>
            <div class="form-group">
                <label for="product ID">Product ID</label><br>
                <input type="text" id="productID" name="ProductID" placeholder=" Product ID" required>
            </div>
            <div class="form-group">
                <label for="productName">Product Name</label><br>
                <input type="text" id="productName" name="productName" placeholder=" Product Name" required>
            </div>
            <div class="form-group">
                <label for="qty">Qty</label><br>
                <input type=number id="qty" name="qty" placeholder=" Qty" required>
            </div>
            <div class="form-group">
                <label for="price">Price</label><br>
                <input type="text" id="price" name="price" placeholder=" Price in Rupiah (RP)" required>
            </div>
            <div class="form-group">
                <label for="expDate">Expired Date</label><br>
                <input type="date" id="expDate" name="expDate" required>
            </div>
            <div class="form-group">
                <label for="pict">Foto</label><br>
                <input type="file" id="pict" name="pict" required>
            </div>
            <div class="form-group">
                <label for="details">Details</label><br>
                <input type="area" id="details" name="details" placeholder=" Put the details of the product in here" required>
            </div>
            <div class=" form-group primary-button end">
                <button type="submit">Update</button>
            </div>
        </form>
        <div class="container-img">
            <img src="Asset/Group 2.png" alt="">
        </div>
@endsection
