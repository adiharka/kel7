@extends('pgw.master')

@section('content')
<script>
    document.title = 'Homepage Product';
    document.getElementById('product').className = 'active';
</script>
        <form class="container-child">
            <div class="title">
                <h2>Product</h2>
            </div>
            <div class="button-add">
                <a href="pgw - form add product.html">
                    <input type="button" value="+ Tambah">
                </a>
                <a href="pgw - form restock product.html">
                    <input type="button" value="+ Restock">
                </a>
            </div>
            <h4>Tabel Product</h4>
            <table border="1" cellpadding="10">
                <table border="1" cellpadding="10">
                    <tr align="center" style="background-color: rgba(238, 207, 99, 0.4);">
                        <td><b>ID Produk</b></td>
                        <td><b>Nama Produk</b></td>
                        <td><b>Stok (pcs)</b></td>
                        <td><b>Harga (Rp)</b></td>
                        <td><b>Expired</b></td>
                        <td><b>Control</b></td>
                    </tr>
                    <tr>
                        <td>BK-01</td>
                        <td>Bye-bye Fever</td>
                        <td>10</td>
                        <td>7.000</td>
                        <td>25/04/2022</td>
                        <td>
                            <div class="button-control">
                                <div class="button-edit">
                                    <a href="pgw - form edit product.html">
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
            </table>
            <h4>Tabel Restock</h4>
            <table border="1" cellpadding="10">
                <tr align="center" style="background-color: rgba(238, 207, 99, 0.4);">
                    <tr align="center" style="background-color: rgba(238, 207, 99, 0.4);">
                        <td><b>ID Pesanan</b></td>
                        <td><b>Tgl Pesan</b></td>
                        <td><b>ID Produk</b></td>
                        <td><b>Qty (pcs)</b></td>
                        <td><b>Total (Rp.)</b></td>
                        <td><b>Supplier</b></td>
                        <td><b>Control</b></td>
                    </tr>
                    <tr>
                        <td>RS-01</td>
                        <td>22/04/2021</td>
                        <td>BK-01</td>
                        <td>8</td>
                        <td>56.000</td>
                        <td>PT. Abdi Jaya</td>
                        <td>
                            <div class="button-control">
                                <div class="button-edit">
                                    <a href="pgw - form edit restock product.html">
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
                </tr>
            </table>
        </form>
        <!-- <div class="container-img">
            <img src="Asset/Group 2.png" alt="">
        </div> -->
@endsection