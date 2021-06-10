@extends('pgw.master')

@section('content')
<script>
    document.title = 'Add pegawai';
    document.getElementById('pegawai').className = 'active';
</script>
        <form method="POST" action="{{ route('pgw.pgw.store')}}"  class="container-child">
            @csrf
            <div class="title">
                <h2>Add Pegawai</h2>
            </div>
            @include('pgw.error')
            <div class="form-group">
                <label for="name">Nama pegawai</label><br>
                <input type="text" id="name" name="name" placeholder=" Nama Lengkap" required>
            </div>
            <div class="form-group">
                <label for="email">E-Mail</label><br>
                <input type="email" id="email" name="email" placeholder=" example@yahoo.com" required>
            </div>
            <div class="form-group">
                <label for="address">Alamat</label><br>
                <input type="text" id="address" name="address" placeholder=" ID" required>
            </div>
            <div class="form-group">
                <label for="Telephone">Telephone</label><br>
                <input type=text id="telp" name="telp" placeholder=" 08xx-xxxx-xxxx" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label><br>
                <input type="password" id="password" name="password" placeholder=" Password" required>
            </div>
            <div class="form-group">
                <label for="re-Password">Confirm Password</label><br>
                <input type="password" id="re-password" name="password_confirmation" placeholder=" re-Password" required>
            </div>
            <div class="form-group primary-button end"><br>
                <button type="submit">Add</button>
            </div>
        </form>
        <div class="container-img">
            <img src="Asset/Group 2.png" alt="">
        </div>
@endsection
