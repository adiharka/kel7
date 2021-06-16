@extends('pgw.master')

@section('title')
<title>Restock</title>
@endsection

@section('content')

<form class="container-child">
    <div class="title">
        <h2>Restock Product</h2>
    </div>
    @include('pgw.error')
    <div class="form-group">
        <label for="purchadeID">Purchase ID</label><br>
        <input type="text" id="purchaseID" name="purchaseID" placeholder=" Purchase ID" required>
    </div>
    <div class="form-group">
        <label for="purchaseDate">Purchase Date</label><br>
        <input type="date" id="purchaseDate" name="purchaseDate" required>
    </div>
    <div class="form-group">
        <label for="productID">Product ID</label><br>
        <input type="text" id="email" name="productID" placeholder="Product ID" required>
    </div>
    <div class="form-group">
        <label for="qty">Qty</label><br>
        <input type="text" id="qty" name="qty" placeholder="Qty" required>
    </div>
    <div class="form-group">
        <label for="totalPurchase">Total</label><br>
        <input type=text id="totalPurchase" name="totalPurchase" placeholder=" Rp." required>
    </div>
    <div class="form-group">
        <label for="supplier">Supplier</label><br>
        <input type="text" id="supllier" name="supplier" placeholder="Supplier">
    </div>
    <div class="form-group">
        <label for="details">Details</label><br>
        <input type="text" id="details" name="details" placeholder=" Details">
    </div>
    <div class="form-group primary-button end"><br>
        <button type="submit">Add</button>
    </div>
</form>
<div class="container-img">
    <img src="Asset/Group 2.png" alt="">
</div>
@endsection
