@extends('user.master')

@section('content')
<script>
    document.title = 'Homepage Order';
    document.getElementById('order').className = 'active';
</script>
        <form class="container-child" method="POST" action="{{ route('user.order.store') }}">
            @csrf
            <div class="title">
                <h2>Order</h2>
            </div>
            @include('user.error')
            <div class="form-group">
                <label for="name">Nama Penerima</label>
                <input name='name' type="text" placeholder="Nama Lengkap" required>
            </div>
            <div class="form-group">
                <label for="address">Alamat Lengkap</label>
                <input name='address' type="text" placeholder="Alamat Lengkap beserta kode pos" required>
            </div>
            <div class="form-group">
                <label for="number">No. Telephone</label>
                <input name="number" type="text" placeholder=" ex : 081234567891" required>
            </div>
            <div class="form-group">
                <label for="item">Item</label>
                <select name="item" id="item">
                    <option selected disabled>----- Pilih Obat -----</option>
                    @forelse ($items as $item)
                    @if ($item->amount == 0)
                    <option disabled value="" label="{{ $item->name }} (HABIS)"></option>
                    @else
                    <option value="{{ $item->id }}" label="{{ $item->name }} (sisa {{ $item->amount }})"></option>
                    @endif
                    @empty
                    <option disabled value="" label="Tidak ada produk"></option>
                    @endforelse
                </select>
            </div>
            <div class="form-group">
                <label for="qty">Qty</label>
                <input name="qty" type="number" name="qty" id="qty" placeholder=" Jumlah Barang" required>
            </div>
            <div class="form-group">
                <label>Jasa Kirim</label>
                <select name="jasaKirim" id="jasaKirim">
                    <option selected disabled>----- Pilih Kurir -----</option>
                    <option value="J&T" label="J&T"></option>
                    <option value="JNE" label="JNE"></option>
                    <option value="Go-Send" label="Go-Send"></option>
                </select>
            </div>
            <!-- <div class="form-group">
                <label for="Notes">Notes</label>
                <textarea id="notes" name="notes"></textarea>
            </div> -->
            <div class=" form-group primary-button end">
                <button type="submit">ORDER</button>
            </div>
        </form>
        <div class="container-img">
            <img src="Asset/Group 2.png" alt="">
        </div>
@endsection
