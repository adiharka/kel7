@extends('user.master')

@section('content')
<script>
    document.title = 'Homepage Pembayaran';
    document.getElementById('payment').className = 'active';
</script>
        <form class="container-child">
            <div class="title">
                <h2>Pembayaran</h2>
            </div>
            <div class="text-box">
                Silahkan melakukan pembayaran sesuai dengan yang tertera dibawah ini :
                </br></br>Transfer ke rekening bank BCA </br>No. Rekening 0001 - 05 - 003 - 15 - 01</br>a/n Inten Bajra Nayottami</br></br>Batas pembayaran 1x24 jam. Setelah melakukan pembayaran diharapkan untuk konfirmasi di halaman yang sudah disediakan. Terima Kasih. </br>
                </br>
                <div class="button-add">
                    <a href="{{ route('user.payment.confirmation')}}">
                        <input type="button" value="CONFIRM">
                    </a>
                </div>
            </div>
        </form>
        <div class="container-img">
            <img src="Asset/Payment Information-pana 1.png" alt="">
        </div>
@endsection
