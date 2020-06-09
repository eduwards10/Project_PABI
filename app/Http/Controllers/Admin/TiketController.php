<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tiket;
use Illuminate\Http\Request;

class TiketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->data['tiket'] = Tiket::all();
        return view('admin.tiket.index', $this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tiket.form');
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
            'nama_tiket' => 'required|min:4',
            'harga_tiket' => 'required',
            'jumlah_tiket' => 'required',
        ]);
        Tiket::create($request->all());
        alert()->success('Informasi', 'Data Berhasil Di Tambah');
        return redirect()->route('tiket.index');
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
        $this->data['item'] = Tiket::findOrFail($id);
        return view('admin.tiket.form', $this->data);
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
            'nama_tiket' => 'required|min:4',
            'harga_tiket' => 'required',
            'jumlah_tiket' => 'required',
        ]);
        $tiket = Tiket::findOrFail($id);
        $tiket->update($request->all());
        alert()->success('Informasi', 'Data Berhasil Di Update');
        return redirect()->route('tiket.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tiket = Tiket::findOrFail($id);
        $tiket->delete();
        alert()->success('Informasi', 'Data Berhasil Di Hapus');
        return redirect()->route('tiket.index');
    }
}
