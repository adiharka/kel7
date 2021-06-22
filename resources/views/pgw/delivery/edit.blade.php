@extends('pgw.master')

@section('title')
<title>Pengiriman</title>
@endsection


@section('content')
<script>
    document.getElementById('delivery').className = 'nav-link active';
</script>
        <form action="{{ route('pgw.delivery.update', $id) }}" class="container-child" method="POST">
            @csrf
            @method('PUT')
            <div class="title">
                <h2>Edit Delivery</h2>
            </div>
            @include('pgw.error')
            <div class="form-group">
                <label>Kode Pesanan</label>
                <span>{{ $purchase->id }}</span>
                {{-- <input type="text" name="kodepesanan" id="kodepesanan" required> --}}
            </div>
            <div class="form-group">
                <label>Penerima</label>
                <span>{{ $purchase->name }}</span>
                {{-- <input type="text" name="resi" id="resi"> --}}
            </div>
            <div class="form-group">
                <label>Tanggal Pembelian</label>
                <span>{{ $purchase->created_at }}</span>
                {{-- <input type="date" name="tglKirim" id="tglKirim" required> --}}
            </div>
            <div class="form-group">
                <label>Status Saat Ini</label>
                <span>{{ $purchase->status }}</span>
                {{-- <input type="date" name="tglKirim" id="tglKirim" required> --}}
            </div>
            <!-- <div class="form-group">
                <label>Ongkos Kirim (Rp)</label>
                <input type="text" name="ongkir" id="ongkir" required>
            </div> -->
            <div class="form-group">
                <label>Status Kirim</label>
                <select name="status" id="statusKirim">
                    <option value="" selected disabled>----- Update Status -----</option>
                    <option value="Menunggu diambil kurir">Menunggu diambil kurir</option>
                    <option value="Paket telah diambil kurir">Paket telah diambil kurir</option>
                    <option value="Paket diantarkan ke alamat">Paket diantarkan ke alamat</option>
                    <option value="Paket telah sampai">Paket telah sampai</option>
                </select>
            </div class="form-group">
            <div class=" form-group primary-button end">
                <button type="submit">update</button>
            </div>
        </form>
        <div class="container-img">
            <img src="Asset/Group 2.png" alt="">
        </div>
@endsection
