@extends('pgw.master')

@section('title')
<title>Homepage Pengiriman</title>
@endsection


@section('content')
<script>
    document.getElementById('delivery').className = 'active';
</script>
        <form class="container-child">
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
                    <td><b>Nama</b></td>
                    <td><b>Ekspedisi</b></td>
                    <td><b>No. Resi</b></td>
                    <td><b>Status</b></td>
                    <td><b>Control</b></td>
                </tr>
                <tr>
                    <td>25/04/2020</td>
                    <td>PS0809</td>
                    <td>Hanif S.R</td>
                    <td>Go-send</td>
                    <td>-</td>
                    <td style="color: green;">Sudah dipickup</td>
                    <td>
                        <div class="button-control">
                            <div class="button-detail">
                                <a href="pgw - form detail delivery.html">
                                    <input type="button" value="Detail">
                                </a>
                            </div>
                            <div class="button-edit">
                                <a href="pgw - form edit delivery.html">
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
                <tr>
                    <td>15/04/2020</td>
                    <td>PS0810</td>
                    <td>Inten B.N</td>
                    <td>J&T</td>
                    <td>JD0036630897</td>
                    <td style="color: red;">Belom diproses</td>
                    <td>
                        <div class="button-control">
                            <div class="button-detail">
                                <a href="">
                                    <input type="button" value="Detail">
                                </a>
                            </div>
                            <div class="button-edit">
                                <a href="">
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
        </form>
        <!-- <div class="container-img">
            <img src="Asset/Group 2.png" alt="">
        </div> -->
@endsection
