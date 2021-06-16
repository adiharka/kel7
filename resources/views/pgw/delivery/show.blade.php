@extends('pgw.master')

@section('title')
<title>Detail Pengiriman</title>
@endsection

@section('content')
<script>
    document.getElementById('delivery').className = 'nav-link active';
</script>
        <form class="container-child">
            <div class="title">
                <h2 class="judul">Detail Pengiriman</h2>
            </div>
            @include('pgw.error')
            <div class="konten">
                <div class="isi">
                    <div>Tanggal Pesanan  </div>
                    <div>Kode pesanan </div>
                    <div>Barang yang dipesan</div>
                    <div>Nama Lengkap  </div>
                    <div>Alamat  </div>
                    <div>No. Telp  </div>
                    <div>Status Order</div>
                </div>
                <div class="isi">
                    <div> : </div>
                    <div> : </div>
                    <div> : </div>
                    <div> : </div>
                    <div> : </div>
                    <div> : </div>
                    <div> : </div>
                </div>
                <div class="isi">
                    <div> 10/04/2021 </div>
                    <div> PS0809 </div>
                    <div> Paracetamol - 2 box </div>
                    <div> Hanif Salvia</div>
                    <div> Perum Surya Asri 2 F9/13, Sidoarjo. 61258. </div>
                    <div> 081234567890 </div>
                    <div> Sudah dipickup</div>
                </div>
            </div>
        </form>
@endsection
