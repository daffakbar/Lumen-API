<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produks = Produk::all();

        return response()->json($produks);
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
        $produks = new Produk();

        $produks->idSupplier    = $request->idSupplier;
        $produks->idKategori    = $request->idKategori;
        $produks->namaProduk    = $request->namaProduk;
        $produks->descProduk    = $request->descProduk;
        $produks->imgProduk     = $request->imgProduk;
        $produks->stok          = $request->stok;
        $produks->harga         = $request->harga;

        $produks->save();

        return response()->json('Produk Successfully Created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produks = Produk::find($id);

        return response()->json($produks);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $produks = Produk::find($id);

        $produks->idSupplier    = $request->idSupplier;
        $produks->idKategori    = $request->idKategori;
        $produks->namaProduk    = $request->namaProduk;
        $produks->descProduk    = $request->descProduk;
        $produks->imgProduk     = $request->imgProduk;
        $produks->stok          = $request->stok;
        $produks->harga         = $request->harga;

        $produks->save();

        return response()->json($produks);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produks = Produk::find($id);

        $produks->delete();
        return response()->json('Produk Successfully Deleted!');
    }
}
