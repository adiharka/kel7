<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Purchase;
use Session;
use Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $items = Item::get();
        return view('user.order.index', compact('items', 'user'));
    }

    public function product()
    {
        $items = Item::get();
        return view('user.product.index', compact('items'));
    }

    public function payment()
    {
        $purchases = Purchase::where('user_id', Auth::id())->get();
        return view('user.payment.index', compact('purchases'));
    }

    public function paymentAfter()
    {
        return view('user.payment.afterform');
    }

    public function delivery()
    {
        $purchases = Purchase::where('user_id', Auth::id())->get();
        return view('user.delivery.index', compact('purchases'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id = $request->item;
        $stok = Item::find($id)->amount;
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'number' => 'required',
            'item' => 'required',
            'jasaKirim' => 'required',
            'qty' => 'required|lte:' . $stok,
        ]);

        $pembelian = new Purchase();
        $pembelian->item_id = $request->item;
        $pembelian->user_id = Auth::id();
        $pembelian->name = $request->name;
        $pembelian->address = $request->address;
        $pembelian->number = $request->number;
        $pembelian->qty = $request->qty;
        $pembelian->jasaKirim = $request->jasaKirim;
        $save = $pembelian->save();

        if ($save) {
            Item::find($id)->decrement('amount', $request->qty);
            Session::flash('success', 'Sukses memesan obat');
            return redirect()->route('user.payment.index');
        } else {
            Session::flash('errors', ['' => 'Gagal memesan obat!']);
            return redirect()->route('user.order.index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function paymentUpdate($id)
    // {
    //     $pesanan = Purchase::find($id);
    //     $pesanan->dibayar = 1;
    //     $save = $pesanan->save();

    //     if ($save) {
    //         Session::flash('success', 'Sukses konfirmasi pembayaran');
    //         return redirect()->route('user.payment.afterform');
    //     } else {
    //         Session::flash('errors', ['' => 'Gagal konfirmasi pembayaran!']);
    //         return redirect()->route('user.payment.index');
    //     }
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
