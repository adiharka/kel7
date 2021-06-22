@extends('user.master')

@section('content')
<script>
    document.title = 'Homepage Product';
    document.getElementById('product').className = 'active';
</script>
        <div class="container-child">
            <div class="title">
                <h2>Katalog Product</h2>
            </div>
            <div class="flex-row list-product">
                @forelse ($items as $item)
                <div class="flex-column product">
                    <div class="flex-row product-photo">
                        <img src="{{ asset($item->image->path)}}" style="overflow: hidden; height:125px; object-fit: cover;" alt="">
                    </div>
                    <div class="flex-column poppins product-description">
                        <h2>{{ $item->name }}</h2>
                        <p>{{ $item->detail }}</p>
                        <span>Rp {{ number_format($item->price, 2, ',', '.') }}</span>
                    </div>
                    <button onclick="location.href='{{ route('user.order.index')}}'" type="button" class="poppins">TAMBAH</button>
                </div>
                @empty
                <h3>Tidak ada produk untuk saat ini</h3>
                @endforelse
            </div>

        </div>
        <!-- <div class="container-img">
            <img src="Asset/Group 2.png" alt="">
        </div> -->
@endsection
