@extends('user.master')

@section('content')
<script>
    document.title = 'Homepage Product';
    document.getElementById('product').className = 'active';
</script>
        <form class="container-child">
            <div class="title">
                <h2>Katalog Product</h2>
            </div>
            <div class="flex-row list-product">
                <div class="flex-column product">
                    <div class="flex-row product-photo">
                        <img src="{{ asset('img/photo/product-1.png')}}" alt="">
                    </div>
                    <div class="flex-column poppins product-description">
                        <h2>METFORMIN 500MG</h2>
                        <p>Per Box (100 Tablet)</p>
                        <span>Rp 19.000</span>
                    </div>
                    <button onclick="location.href='{{ route('user.order.index')}}'" type="button" class="poppins">TAMBAH</button>
                </div>
                <div class="flex-column product">
                    <div class="flex-row product-photo">
                        <img src="{{ asset('img/photo/product-2.png')}}" alt="">
                    </div>
                    <div class="flex-column poppins product-description">
                        <h2>CANDESARTAN 32MG</h2>
                        <p>Per Box (30 Tablet)</p>
                        <span>Rp 25.200</span>
                    </div>
                    <button onclick="location.href='{{ route('user.order.index')}}'" type="button" class="poppins">TAMBAH</button>
                </div>
                <!-- <div class="flex-column product">
                    <div class="flex-row product-photo">
                        <img src="img/photo/product-3.png" alt="">
                    </div>
                    <div class="flex-column poppins product-description">
                        <h2>ATORVASTATIN 20MG</h2>
                        <p>Per Box (30 Tablet)</p>
                        <span>Rp 96.300</span>
                    </div>
                    {{-- <button onclick="location.href='{{ route('user.order.index')}}'" type="button" class="poppins">TAMBAH</button> --}}
                </div> -->
                <div class="flex-column product">
                    <div class="flex-row product-photo">
                        <img src="{{ asset('img/photo/product-4.png')}}" alt="">
                    </div>
                    <div class="flex-column poppins product-description">
                        <h2>SIMVASTATIN 20MG</h2>
                        <p>Per 3 Strip</p>
                        <span>Rp 16.800</span>
                    </div>
                    <button onclick="location.href='{{ route('user.order.index')}}'" type="button" class="poppins">TAMBAH</button>
                </div>
                <div class="flex-column product">
                    <div class="flex-row product-photo">
                        <img src="{{ asset('img/photo/product-5.png')}}" alt="">
                    </div>
                    <div class="flex-column poppins product-description">
                        <h2>ASPILETS 20 TABLET</h2>
                        <p>Per 3 Strip</p>
                        <span>Rp 28.200</span>
                    </div>
                    <button onclick="location.href='{{ route('user.order.index')}}'" type="button" class="poppins">TAMBAH</button>
                </div>
            </div>

        </form>
        <!-- <div class="container-img">
            <img src="Asset/Group 2.png" alt="">
        </div> -->
@endsection
