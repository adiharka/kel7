@extends('pgw.master')

@section('content')
<script>
    document.title = 'Delivery';
    document.getElementById('delivery').className = 'nav-link active';
</script>    
<form class="container-child">
    <div class="title">
        <h2>Delivery</h2>
    </div>
    <div class="form-group">
        <label>Kode Pesanan</label>
        <input type="text" name="kodepesanan" id="kodepesanan" required>
    </div>
    <div class="form-group">
        <label>No. Resi</label>
        <input type="text" name="resi" id="resi">
    </div>
    <div class="form-group">
        <label>Tanggal Kirim</label>
        <input type="date" name="tglKirim" id="tglKirim" required>
    </div>
    <!-- <div class="form-group">
        <label>Ongkos Kirim (Rp)</label>
        <input type="text" name="ongkir" id="ongkir" required>
    </div> -->
    <div class="form-group">
        <label>Jasa Kirim</label>
        <select name="jasaKirim" id="jasaKirim">
            <option>----- Pilih Jasa Kirim -----</option>
            <option value="J&T">J&T</option>
            <option label="JNE"></option>
            <option label="Go-Send"></option>
        </select>
    </div>
    <div class="form-group">
        <label>Status Kirim</label>
        <select name="statusKirim" id="statusKirim">
            <option>----- Pilih Status -----</option>
            <option value="Belum diproses">Belum diproses</option>
            <option label="Sudah dipick-up"></option>
            <option label="Selesai"></option>
        </select>
    </div class="form-group">
    <div class=" form-group primary-button end">
        <button type="submit">Selesai</button>
    </div>
</form>
<div class="container-img">
    <img src="Asset/Group 2.png" alt="">
</div>
@endsection
