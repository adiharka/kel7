@extends('user.master')

@section('content')
<script>
    document.title = 'Terimakasih';
    document.getElementById('payment').className = 'active';
</script>
        <form class="container-child">
            <div class="title">
                <h2>Thank You for Your Order</h2>
            </div>
            <div class="text-box">
                Pesanan akan segera kami proses.<br></br>Untuk info lebih lanjut dapat dilihat pada menu Delivery </br></br>
                <div class="button-add">
                    <a href="{{ route('user.delivery.index')}}">
                        <input type="button" value="DELIVERY">
                    </a>
                </div>
            </div>
        </form>
        <div class="container-img">
            <img src="{{ asset('Asset/Appreciation-bro.png')}}" alt="">
        </div>
@endsection
