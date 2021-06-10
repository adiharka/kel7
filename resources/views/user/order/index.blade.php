@extends('user.master')

@section('content')
<script>
    document.title = 'Homepage Order';
    document.getElementById('order').className = 'active';
</script>
        <form class="container-child">
            <div class="title">
                <h2>Order</h2>
            </div>
            <div class="form-group">
                <label for="namaPenerima">Nama Penerima</label>
                <input type="text" placeholder="Nama Lengkap" required>
            </div>
            <div class="form-group">
                <label for="alamatPenerima">Alamat Lengkap</label>
                <input type="text" placeholder="Alamat Lengkap beserta kode pos" required>
            </div>
            <div class="form-group">
                <label for="nomorTelp">No. Telephone</label>
                <input type="text" placeholder=" ex : 081234567891" required>
            </div>
            <div class="form-group">
                <label>Kode Item</label>
                <input type="text" name="kodeItem" id="kodeItem" placeholder=" Kode Barang" required>
                <!-- <label>Item</label>
                <select name="item" id="item">
                    <option>----- Choose Item -----</option>
                    <option label="Obat demam"></option>
                    <option label="Obat pilek"></option>
                    <option label="Obat Keras"></option>
                    <option label="P3K"></option>
                </select> -->
            </div>
            <div class="form-group">
                <label>Qty</label>
                <input type="number" name="qty" id="qty" placeholder=" Jumlah Barang" required>
            </div>
            <div class="form-group">
                <label>Jasa Kirim</label>
                <select name="jasaKirim" id="jasaKirim">
                    <option>----- Choose Item -----</option>
                    <option label="J&T"></option>
                    <option label="JNE"></option>
                    <option label="Go-Send"></option>
                </select>
            </div>
            <!-- <div class="form-group">
                <label for="Notes">Notes</label>
                <textarea id="notes" name="notes"></textarea>
            </div> -->
            <div class=" form-group primary-button end">
                <button onclick="location.href='{{ route('user.payment.index')}}'" type="submit">ORDER</button>
            </div>
        </form>
        <div class="container-img">
            <img src="Asset/Group 2.png" alt="">
        </div>
@endsection
