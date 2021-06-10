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
    <div class="status-box">
        <div>Order ID : id087ja</div>
        <div>No. Resi : JP 0918 04 782 1</div>
        <div>Jasa Kirim : J&T</div>
        <div>Status : Pesanan Selesai</div>
    </div>
    </br></br>
    <div class="status-box">
        <div>Order ID : aj025qa</div>
        <div>No. Resi : -</div>
        <div>Jasa Kirim : Go-send (instant)</div>
        <div>Status : Belum di pick-up</div>
    </div>
    <div class="container-img">
        <img src="Asset/Take Away-pana 2.png" alt="">
    </div>
</form>
@endsection
