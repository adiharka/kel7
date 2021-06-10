@extends('user.master')

@section('content')
<script>
    document.title = 'Konfirmasi Pembayaran';
    document.getElementById('payment').className = 'active';
</script>
        <form class="container-child">
            <div class="title">
                <h2>Payment Confirmation</h2>
            </div>
            <div class="form-group">
                <label for="orderID">Order ID</label><br>
                <input type="orderID" id="orderID" name="orderID" placeholder=" Order ID" required>
            </div>
            <div class="form-group">
                <label for="bankName"> Bank Account Name</label><br>
                <input type=text id="bankName" name="bankName" placeholder=" ex : a/n Inten Bajra" required>
            </div>
            <div class="form-group">
                <label for="banktf">Bank</label><br>
                <select name="banktf" id="banktf">
                    <option>------- Select Bank -------</option>
                    <option>BCA</option>
                    <option>BRI</option>
                    <option>BNI</option>
                    <option>Bank Jatim</option>
                </select>
            </div>
            <!-- <div class="form-group">
                <label for="bankNum">Bank Account Number</label><br>
                <input type="text" id="bankNum" name="bankNum" placeholder=" ex : 0086 01 159 1" required>
            </div> -->
            <div class="form-group">
                <label for="paymentReceipt">Payment Receipt</label><br>
                <input type="file" id="paymentReceipt" name="paymentReceipt" required>
            </div>

            <div class="button-add">
                <a href="{{ route('user.payment.afterform')}}">
                    <input type="button" value="FINISH">
                </a>
            </div>
        </form>
        <div class="container-img">
            <img src="Asset/Pharmacist-amico 2.png" alt="">
        </div>
@endsection
