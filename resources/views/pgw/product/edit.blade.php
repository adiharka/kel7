@extends('pgw.master')

@section('title')
<title>Edit Produk</title>
@endsection


@section('content')
<script>
    document.title = 'Edit Product';
    document.getElementById('product').className = 'active';
</script>
        <form method="POST" action="{{ route('pgw.product.update', $id) }}" class="container-child" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="title">
                <h2>Edit Product</h2>
            </div>
            @include('pgw.error')
            <img src="{{ asset($product->image->path) }}" alt="" width="350px">
            <div class="form-group">
                <label for="name">Product Name</label><br>
                <input type="text" id="name" name="name" placeholder=" Product Name" value="{{ old('name', $product->name)}}" required>
            </div>
            <div class="form-group">
                <label for="price">Price</label><br>
                <input type="text" id="price" name="price" placeholder=" Price in Rupiah (RP)" value="{{ old('price', $product->price)}}" required>
            </div>
            <div class="form-group">
                <label for="exp">Expired Date</label><br>
                <input type="date" id="exp" name="exp" value="{{ old('exp', $product->exp)}}" required>
            </div>
            <div class="form-group">
                <label for="detail">Detail</label><br>
                <input type="area" id="detail" name="detail" placeholder=" Put the detail of the product in here" value="{{ old('detail', $product->detail)}}" required>
            </div>
            <div class="form-group">
                <label for="image">Foto</label><br>
                <input type="file" id="image" name="image" required>
            </div>
            <div class=" form-group primary-button end">
                <button type="submit">Update</button>
            </div>
        </form>
        <div class="container-img">
            <img src="Asset/Group 2.png" alt="">
        </div>
@endsection
