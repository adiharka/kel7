@extends('pgw.master')

@section('content')
<script>
    document.title = 'Homepage Pesanan';
    document.getElementById('pesanan').className = 'active';
</script>
        <form class="container-child">
            <div class="title">
                <h2>Detail Pesanan</h2>
            </div>
            <div class="konten">
                <div class="foto-tf">
                    <img src="Asset/bukti tf.jpg">
                </div>
                <div class="konten">
                    <div class="jawab">
                        <div>Kode pesanan  </div>
                        <div>Tanggal Pesanan  </div>
                        <div>Bank Asal </div>
                        <div>Rekening a/n  </div>
                    </div>
                    <div class="jawab">
                        <div> : </div>
                        <div> : </div>
                        <div> : </div>
                        <div> : </div>
                    </div>
                    <div class="jawab">
                        <div> PS0809 </div>
                        <div> 10/04/2021 </div>
                        <div> BRI </div>
                        <div> a.n Hanif Salvia </div>
                    </div>
                </div>

            </div>
        </form>
@endsection
