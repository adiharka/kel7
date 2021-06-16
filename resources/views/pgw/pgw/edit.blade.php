@extends('pgw.master')

@section('title')
<title>Edit Pegawai</title>
@endsection

@section('content')
<script>
    document.getElementById('pegawai').className = 'active';
</script>
        <form method="POST" action="{{ route('pgw.pgw.update', $id)}}" class="container-child" >
            @method('PUT')
            @csrf
            <div class="title">
                <h2>Edit Pegawai</h2>
            </div>
            @include('pgw.error')
            <div class="form-group">
                <label for="idPgw">ID Pegawai</label><br>
                <p>{{ $pgw->id }}</p>
            </div>
            <div class="form-group">
                <label for="email">E-Mail</label><br>
                <p>{{ $user->email }}</p>
                {{-- <input type="email" id="email" name="email" placeholder=" example@yahoo.com" value="{{ old('email', $user->email)}}" required> --}}
            </div>
            <div class="form-group">
                <label for="name">Nama pegawai</label><br>
                <input type="text" id="name" name="name" placeholder=" Nama Lengkap" value="{{ old('name', $user->name)}}" required>
            </div>
            <div class="form-group">
                <label for="telp">Telephone</label><br>
                <input type=text id="telp" name="telp" placeholder=" 08xx-xxxx-xxxx" value="{{ old('telp', $pgw->phone)}}" required>
            </div>
            <div class="form-group">
                <label for="address">Alamat</label><br>
                <input type=text id="address" name="address" placeholder=" 08xx-xxxx-xxxx" value="{{ old('address', $pgw->address)}}" required>
            </div>
            <div class="form-group primary-button end"><br>
                <button type="submit">Update</button>
            </div>
        </form>
        <div class="container-img">
            <img src="Asset/Group 2.png" alt="">
        </div>
@endsection
