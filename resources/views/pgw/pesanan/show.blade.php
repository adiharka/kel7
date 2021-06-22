@extends('pgw.master')

@section('title')
<title>Detail Pesanan</title>
@endsection


@section('content')
<script>
    document.getElementById('pesanan').className = 'active';
</script>
        <form class="container-child">
            <div class="title">
                <h2>Detail Pesanan</h2>
            </div>
            <div class="konten">
                <div class="konten">
                    <div class="jawab">
                        <div>Kode pesanan  </div>
                        <div>Tanggal Pesanan  </div>
                        <div>Penerima  </div>
                        <div>Alamat </div>
                        <div>No. Telepon  </div>
                        <div>Jasa Kirim  </div>
                        <div>Barang  </div>
                        <div>Jumlah Pesanan  </div>
                        <div>Status Pembayaran  </div>
                        <div>Status  </div>
                    </div>
                    <div class="jawab">
                        <div> : </div>
                        <div> : </div>
                        <div> : </div>
                        <div> : </div>
                        <div> : </div>
                        <div> : </div>
                        <div> : </div>
                        <div> : </div>
                        <div> : </div>
                        <div> : </div>
                    </div>
                    <div class="jawab">
                        <div> {{ $purchase->id }} </div>
                        <div> {{ $purchase->created_at }} </div>
                        <div> {{ $purchase->name }} </div>
                        <div> {{ $purchase->address }} </div>
                        <div> {{ $purchase->number }} </div>
                        <div> {{ $purchase->jasaKirim }} </div>
                        <div> {{ $purchase->item->name }} </div>
                        <div> {{ $purchase->qty }} </div>
                        @if ($purchase->dibayar)
                        <div>Dibayar</div>
                        @else
                        <div>Belum dibayar</div>
                        @endif
                        <div> {{ $purchase->status }} </div>
                    </div>
                </div>

            </div>
        </form>
@endsection
