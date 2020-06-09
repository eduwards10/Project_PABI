<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Tiket;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategori = Kategori::all();
        $tiket = Tiket::latest()->get();
        return $this->load_theme('home', compact('kategori', 'tiket'));
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
}
