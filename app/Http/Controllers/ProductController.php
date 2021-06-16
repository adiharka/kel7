<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use Session;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Item::get();
        return view('pgw.product.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pgw.product.create');
    }

    public function restock()
    {
        return view('pgw.product.restock');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'expDate' => 'required',
            'details' => 'required',
        ]);

        $item = new Item();
        $item->name = $request->name;
        $item->amount = $request->qty;
        $item->price = $request->price;
        $item->exp = $request->expDate;
        $item->detail = $request->details;
        $save = $item->save();

        if ($save) {
            Session::flash('success', 'Sukses membuat pegawai');
            return redirect()->route('pgw.product.index');
        } else {
            Session::flash('errors', ['' => 'Gagal membuat pegawai!']);
            return redirect()->route('pgw.product.create');
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
    public function edit($id)
    {
        $product = Item::find($id);
        return view('pgw.product.edit', compact('product', 'id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'exp' => 'required',
        ]);

        $item = Item::find($id);
        $item->name = $request->name;
        $item->price = $request->price;
        $item->exp = $request->exp;
        $save = $item->save();

        if ($save) {
            Session::flash('success', 'Sukses mengedit produk');
            return redirect()->route('pgw.product.index');
        } else {
            Session::flash('errors', ['' => 'Gagal mengedit produk!']);
            return redirect()->route('pgw.product.restock');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restockUpdate(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'qty' => 'required',
            'expDate' => 'required',
        ]);

        $item = Item::find($request->name);
        $item->amount = $item->amount + $request->qty;
        $item->exp = $request->expDate;
        $save = $item->save();

        if ($save) {
            Session::flash('success', 'Sukses menambah stok');
            return redirect()->route('pgw.product.index');
        } else {
            Session::flash('errors', ['' => 'Gagal menambah stok!']);
            return redirect()->route('pgw.product.restock');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Item::destroy($id);

        return redirect()->route('pgw.product.index')
            ->with('success', 'Sukses menghapus produk');
    }
}
