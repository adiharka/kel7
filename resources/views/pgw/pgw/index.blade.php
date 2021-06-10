@extends('pgw.master')

@section('content')
<script>
    document.title = 'Homepage Pegawai';
    document.getElementById('pegawai').className = 'active';

</script>
<div class="container-child">
    <div class="title">
        <h2>Pegawai</h2>
    </div>
    @include('pgw.error')
    <div class="button-add">
        <a href="{{ route('pgw.pgw.create')}}">
            <input type="button" value="+ Tambah">
        </a>
    </div>
    </br>
    <h4>Tabel Pegawai Aktif</h4>
    <table border="1" cellpadding="10">
        <tr align="center" style="background-color: rgba(238, 207, 99, 0.4);">
            <td><b>ID Pegawai</b></td>
            <td><b>Nama</b></td>
            <td><b>E-Mail</b></td>
            <td><b>Alamat</b></td>
            <td><b>No Telp</b></td>
            <td><b>Control</b></td>
        </tr>
        @foreach ($pegawai as $pegawai)
        {{-- @if ($pegawai->user->status) --}}
        <tr>
            <td>{{$pegawai->id}}</td>
            <td>{{$pegawai->user->name}}</td>
            <td>{{$pegawai->user->email}}</td>
            <td>{{$pegawai->address}}</td>
            <td>{{$pegawai->phone}}</td>
            <td>
                <div class="button-control">
                    <div class="button-edit">
                        <a href="{{ route('pgw.pgw.edit', $pegawai->id)}}">
                            <input type="button" value="Edit">
                        </a>
                    </div>
                    <form action="{{ route('pgw.pgw.destroy', $pegawai->id)}}" onsubmit="return confirm('Yakin menghapus?')" method="POST">
                        @csrf
                        @method('DELETE')
                        <a class="button-delete" >
                            {{-- <button type='submit' class="button-delete" >Remove {{$pegawai->id}} </button> --}}
                            <input type="submit" name="_method" value="DELETE">
                        </a>
                    </form>
                </div>
            </td>
        </tr>
        {{-- @endif --}}
        @endforeach
    </table>
    <h4>Tabel Pegawai Non-Aktif</h4>
    <table border="1" cellpadding="10">
        <tr align="center" style="background-color: rgba(238, 207, 99, 0.4);">
            <td><b>ID Pegawai</b></td>
            <td><b>Nama</b></td>
            <td><b>E-Mail</b></td>
            <td><b>Alamat</b></td>
            <td><b>No Telp</b></td>
            <td><b>Control</b></td>
        </tr>
        @foreach ($peg as $pegg)
        <tr>
            <td>{{$pegg->id}}</td>
            <td>{{$pegg->user->name}}</td>
            <td>{{$pegg->user->email}}</td>
            <td>{{$pegg->address}}</td>
            <td>{{$pegg->phone}}</td>
            <td>
                <form action="{{ route('pgw.pgw.on', $pegg->id)}}" method="POST">
                    @csrf
                    <a class="button-active">
                        <input type="submit" value="Active">
                    </a>
                </form>
            </td>
        </tr>
        {{-- @endif --}}
        @endforeach
    </table>
</div>
<!-- <div class="container-img">
            <img src="Asset/Group 2.png" alt="">
        </div> -->
@endsection
