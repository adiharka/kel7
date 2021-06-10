@extends('pgw.master')

@section('content')
<script>
    document.title = 'Add pegawai';
    document.getElementById('pegawai').className = 'active';
</script>
        <form class="container-child">
            <div class="title">
                <h2>Edit Pegawai</h2>
            </div>
            <div class="form-group">
                <label for="idPgw">ID Pegawai</label><br>
                <input type="text" id="idPgw" name="idPgw" placeholder=" ID" required>
            </div>
            <div class="form-group">
                <label for="namaPgw">Nama pegawai</label><br>
                <input type="text" id="namaPgw" name="namaPgw" placeholder=" Nama Lengkap" required>
            </div>
            <div class="form-group">
                <label for="email">E-Mail</label><br>
                <input type="email" id="email" name="email" placeholder=" example@yahoo.com" required>
            </div>
            <div class="form-group">
                <label for="Telephone">Telephone</label><br>
                <input type=text id="telp" name="telp" placeholder=" 08xx-xxxx-xxxx" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label><br>
                <input type="password" id="password" name="password" placeholder=" Password" required>
            </div>
            <div class="form-group primary-button end"><br>
                <button type="submit">Update</button>
            </div>
        </form>
        <div class="container-img">
            <img src="Asset/Group 2.png" alt="">
        </div>
@endsection
