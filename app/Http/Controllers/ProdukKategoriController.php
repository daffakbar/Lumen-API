<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProdukKategori;

class ProdukKategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produkkategoris = ProdukKategori::all();

        return response()->json($produkkategoris);
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
        $produkkategoris = new ProdukKategori();

        $produkkategoris->namaKategori = $request->namaKategori;
        

        $produkkategoris->save();

        return response()->json('Produk Kategori Successfully Created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produkkategoris = ProdukKategori::find($id);

        return response()->json($produkkategoris);
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
        $produkkategoris = ProdukKategori::find($id);

        $produkkategoris->namaKategori = $request->namaKategori;
        $produkkategoris->save();

        return response()->json($produkkategoris);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produkkategoris = ProdukKategori::find($id);

        $produkkategoris->delete();
        return response()->json('Produk Kategori Successfully Deleted!');
    }
}
