@extends('user.master')

@section('content')
<script>
    document.title = 'Homepage Pembayaran';
    document.getElementById('payment').className = 'active';
</script>
        <div class="container-child">
            <div class="title">
                <h2>Pembayaran</h2>
            </div>
            <div class="text-box">
                Silahkan melakukan pembayaran sesuai dengan yang tertera dibawah ini :
                </br></br>Transfer ke rekening bank BCA </br>No. Rekening 0001 - 05 - 003 - 15 - 01</br>a/n Inten Bajra Nayottami</br></br>Batas pembayaran 1x24 jam. Setelah melakukan pembayaran diharapkan untuk konfirmasi di halaman yang sudah disediakan. Terima Kasih. </br>
                </br>
                @forelse ($purchases as $pesanan)

                <h3>{{ $pesanan->name }}</h3>
                <div class="text-box">{{ $pesanan->item->name }} - {{ $pesanan->qty }} buah</div>
                    @if ($pesanan->dibayar == 0)
                        <span style="margin-left: 3rem">Harap segara membayar dlm 1x24jam</span>
                    @else
                        <span style="margin-left: 3rem">Pembayaran telah dikonfirmasi</span>
                    @endif
                @empty
                    <h3>Belum ada pesanan</h3>
                @endforelse
            </div>
        </div>
        <div class="container-img">
            <img src="{{ asset('Asset/Payment Information-pana 1.png') }}" alt="">
        </div>
@endsection
