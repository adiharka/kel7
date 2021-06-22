@extends('user.master')

@section('content')
<script>
    document.title = 'Homepage Delivery';
    document.getElementById('delivery').className = 'active';

</script>
<form class="container-child">
    <div class="title">
        <h2>Status Order</h2>
    </div>
    @forelse ($purchases as $pembelian)
    <div class="status-box">
        <div>Order ID : {{ $pembelian->id }}</div>
        <div>Penerima : {{ $pembelian->name }}</div>
        <div>Jasa Kirim : {{ $pembelian->jasaKirim }}</div>
        <div>Status : {{ $pembelian->status }}</div>
    </div>
    </br></br>
    @empty
    <span>Tidak ada pesanan</span>
    @endforelse
    <div class="container-img">
        <img src="{{ asset('Asset/Take Away-pana 2.png') }}" alt="">
    </div>
</form>
@endsection
