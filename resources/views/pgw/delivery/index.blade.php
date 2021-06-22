@extends('pgw.master')

@section('title')
<title>Homepage Pengiriman</title>
@endsection


@section('content')
<script>
    document.getElementById('delivery').className = 'active';
</script>
        <div class="container-child">
            <div class="title">
                <h2>Delivery</h2>
            </div>
            @include('pgw.error')
            <div class="button-add">
                <a href="pgw - form add delivery.html">
                    <input type="button" value="+ Tambah">
                </a>
            </div>
            <h4>Tabel Order</h4>
            <table border="0" cellpadding="10">
                <tr align="center" style="background-color: rgba(238, 207, 99, 0.4);">
                    <td><b>Tgl Pesan</b></td>
                    <td><b>Kode Pesanan</b></td>
                    <td><b>Penerima</b></td>
                    <td><b>Ekspedisi</b></td>
                    <td><b>Status</b></td>
                    <td><b>Control</b></td>
                </tr>
                @forelse ($purchases as $pesanan)
                <tr>
                    <td>{{ $pesanan->created_at }}</td>
                    <td>{{ $pesanan->id }}</td>
                    <td>{{ $pesanan->name }}</td>
                    <td>{{ $pesanan->jasaKirim }}</td>
                    <td>{{ $pesanan->status }}</td>
                    <td>
                        <div class="button-control">
                            <div class="button-detail">
                                <a href="{{ route('pgw.pesanan.show', $pesanan->id) }}">
                                    <input type="button" value="Detail">
                                </a>
                            </div>
                            <div class="button-edit">
                                <a href="{{ route('pgw.delivery.edit', $pesanan->id) }}">
                                    <input type="button" value="Edit">
                                </a>
                            </div>
                            <div class="button-delete">
                                <a href="">
                                    <input type="button" value="Hapus">
                                </a>
                            </div>

                        </div>
                    </td>
                </tr>
                @empty
                <tr>Tidak ada pesanan</tr>
                @endforelse

        </form>
        <!-- <div class="container-img">
            <img src="Asset/Group 2.png" alt="">
        </div> -->
@endsection
