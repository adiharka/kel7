<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Employee;
use Hash;
use Illuminate\Support\Facades\Auth;
use Session;

class PgwController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pegawais = Employee::all();
        $peg = Employee::onlyTrashed()->get();
        return view('pgw.pgw.index', compact('pegawais', 'peg'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pgw.pgw.create');
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
            'email' => 'required|email|unique:users',
            'telp' => 'required',
            'address' => 'required',
            'password' => 'required|confirmed',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->role = 'pgw';
        $user->password = Hash::make($request->password);
        $save = $user->save();

        $pegawai = new Employee;
        $pegawai->user_id = $user->id;
        $pegawai->address = $request->address;
        $pegawai->phone = $request->telp;

        $save2 = $pegawai->save();


        if ($save && $save2) {
            Session::flash('success', 'Sukses membuat pegawai');
            return redirect()->route('pgw.pgw.index');
        } else {
            Session::flash('errors', ['' => 'Gagal membuat pegawai!']);
            return redirect()->route('pgw.pgw.create');
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
        $pgw = Employee::where('id', $id)->first();
        $user = User::where('id', $pgw->user_id)->first();
        return view('pgw.pgw.show', compact('pgw', 'user', 'id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pgw = Employee::where('id', $id)->first();
        $user = User::where('id', $pgw->user_id)->first();
        return view('pgw.pgw.edit', compact('pgw', 'user', 'id'));
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
            'telp' => 'required',
        ]);

        $user = User::find($id);
        $user->name = $request->name;
        $save = $user->save();

        $pegawai = Employee::find($id);
        $pegawai->address = $request->address;
        $pegawai->phone = $request->telp;

        $save2 = $pegawai->save();

        if ($save && $save2) {
            Session::flash('success', 'Sukses mengedit pegawai');
            return redirect()->route('pgw.pgw.index');
        } else {
            Session::flash('errors', ['' => 'Gagal mengedit pegawai!']);
            return redirect()->route('pgw.pgw.create');
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
        User::find(Employee::where('id', $id)->first()->user_id)->delete();
        Employee::find($id)->delete();

        return redirect()->route('pgw.pgw.index')
            ->with('success', 'Sukses menghapus pegawai');
    }

    public function on($id)
    {
        Employee::onlyTrashed()->find($id)->restore();
        User::onlyTrashed(Employee::where('id', $id)->first()->user_id)->restore();

        return redirect()->route('pgw.pgw.index')
            ->with('success', 'Sukses mengaktifkan pegawai');
    }
}
