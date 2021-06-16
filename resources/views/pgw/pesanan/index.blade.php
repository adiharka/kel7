@extends('pgw.master')

@section('title')
<title>Homepage Pesanan</title>
@endsection

@section('content')
<script>
    document.getElementById('pesanan').className = 'active';
</script>
        <form class="container-child">
            <div class="title">
                <h2>Pesanan</h2>
            </div>
            <table border="1" cellpadding="10">
                <tr align="center" style="background-color: rgba(238, 207, 99, 0.4);">
                    <td><b>Kode Pesanan</b></td>
                    <td><b>Bank Asal</b></td>
                    <td><b>Atas Nama</b></td>
                    <td><b>Bukti Transfer</b></td>
                </tr>
                <tr>
                    <td>PS0809</td>
                    <td>BRI</td>
                    <td>Haniffs</td>
                    <td>
                        <div class="button-control">
                            <div class="button-detail">
                                <a href="pgw - form detail pesanan.html">
                                    <input type="button" value="Lihat">
                                </a>
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
        </form>
        <!-- <div class="container-img">
            <img src="Asset/Group 2.png" alt="">
        </div> -->
@endsection
