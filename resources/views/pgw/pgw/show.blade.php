@extends('pgw.master')

@section('content')
<script>
    document.title = 'Homepage Pegawai';
    document.getElementById('pegawai').className = 'active';
</script>
        <form class="container-child">
            <div class="title">
                <h2>Detail Pegawai</h2>
            </div>
            <div class="konten">
                <div class="foto-ptofil">
                    <img src="Asset/fotoprof.png">
                </div>
                <div class="jawab">
                    <div>ID Pegawai : </div>
                    <div>Nama Lengkap :</div>
                    <div>Email :</div>
                    <div>Telephone : </div>
                    <div>Alamat : </div>
                </div>
            </div>
        </form>
@endsection
