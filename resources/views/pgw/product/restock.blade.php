@extends('pgw.master')

@section('title')
<title>Restock Produk</title>
@endsection

@section('content')
<script>
    document.getElementById('product').className = 'active';
</script>
        <form method="POST" action="{{ route('pgw.restock.update', 1) }}" class="container-child">
            @method('PUT')
            @csrf
            <div class="title">
                <h2>Restock</h2>
            </div>
            @include('pgw.error')
            <div class="form-group">
                <label for="name">Nama Produk</label><br>
                <select name="name" id="name">
                    <option value="" disabled selected>Pilih Produk</option>
                    @forelse ($items as $item)
                    <option value="{{ $item->id }}">{{ $item->name }} (sisa {{ $item->amount }})</option>
                    @empty
                    <option value="" disabled selected>Tambahkan produk terlebih dahulu</option>
                    @endforelse
                </select>
            </div>
            <div class="form-group">
                <label for="qty">Qty</label><br>
                <input type=number id="qty" name="qty" placeholder=" Qty">
            </div>
            <div class="form-group">
                <label for="expDate">Expired Date</label><br>
                <input type="date" id="expDate" name="expDate" required>
            </div>
            <div class=" form-group primary-button end">
                <button type="submit">Add</button>
            </div>
        </form>
        <div class="container-img">
            <img src="Asset/Group 2.png" alt="">
        </div>
@endsection
