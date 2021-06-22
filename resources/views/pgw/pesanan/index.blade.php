@extends('pgw.master')

@section('title')
<title>Homepage Pesanan</title>
@endsection

@section('content')
<script>
    document.getElementById('pesanan').className = 'active';
</script>
        <div class="container-child">
            <div class="title">
                <h2>Pesanan</h2>
            </div>
            @include('pgw.error')
            <table border="1" cellpadding="10">
                <tr align="center" style="background-color: rgba(238, 207, 99, 0.4);">
                    <td><b>Kode Pesanan</b></td>
                    <td><b>Penerima</b></td>
                    <td><b>Barang</b></td>
                    <td><b>Jumlah</b></td>
                    <td><b>Status</b></td>
                    <td width='270px'><b>Action</b></td>
                </tr>
                @forelse ($purchases as $pesanan)
                <tr>
                    <td>{{ $pesanan->id }}</td>
                    <td>{{ $pesanan->name }}</td>
                    <td>{{ $pesanan->item->name }}</td>
                    <td>{{ $pesanan->qty }}</td>
                    <td>{{ $pesanan->status }}</td>
                    <td>
                        {{-- <div class="button-control"> --}}
                            <div class="button-detail" style="display: flex; flex-direction: row; gap:5px">
                                <form action="{{ route('pgw.pesanan.show', $pesanan->id) }}">
                                    <input type="submit" value="detail">
                                </form>
                                @if ($pesanan->dibayar == 0)
                                <form action="{{ route('pgw.pesanan.update', $pesanan->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <input style="width: 10rem" type="submit" value="konfirm pembayaran">
                                </form>
                                @endif
                                {{-- <a href="pgw - form detail pesanan.html">
                                    <input type="button" value="Lihat">
                                </a> --}}
                            </div>
                        {{-- </div> --}}
                    </td>
                </tr>
                @empty
                <tr>Tidak ada pesanan</tr>
                @endforelse
            </table>
        </div>
        <!-- <div class="container-img">
            <img src="Asset/Group 2.png" alt="">
        </div> -->
@endsection
