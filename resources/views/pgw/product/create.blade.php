@extends('pgw.master')

@section('title')
<title>Tambah Produk</title>
@endsection

@section('content')
<script>
    document.getElementById('product').className = 'active';
</script>
        <form method="POST" action="{{ route('pgw.product.store') }}" class="container-child" enctype="multipart/form-data">
            @csrf
            <div class="title">
                <h2>Add Product</h2>
            </div>
            @include('pgw.error')
            <div class="form-group">
                <label for="name">Product Name</label><br>
                <input type="text" id="name" name="name" placeholder=" Product Name" required>
            </div>
            <div class="form-group">
                <label for="qty">Qty</label><br>
                <input type=number id="qty" name="qty" placeholder=" Qty">
            </div>
            <div class="form-group">
                <label for="price">Price</label><br>
                <input type="number" id="price" name="price" placeholder=" Price in Rupiah (RP)" required>
            </div>
            <div class="form-group">
                <label for="expDate">Expired Date</label><br>
                <input type="date" id="expDate" name="expDate" required>
            </div>
            <div class="form-group">
                <label for="image">Foto</label><br>
                <input type="file" id="image" name="image" required>
            </div>
            <div class="form-group">
                <label for="details">Details</label><br>
                <input type="area" id="details" name="details" placeholder=" Put the details of the product in here" required>
            </div>
            <div class=" form-group primary-button end">
                <button type="submit">Add</button>
            </div>
        </form>
        <div class="container-img">
            <img src="Asset/Group 2.png" alt="">
        </div>
@endsection
