<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penjualan;
use App\Models\DetailPenjualan;
use Illuminate\Support\Facades\DB;

class PenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
       
        $detailpenjualans = new DetailPenjualan();

        $detailpenjualans->idPenjualan     = $request->idPenjualan;
        $detailpenjualans->idProduk        = $request->idProduk;
        $detailpenjualans->tglPenjualan    = $request->tglPenjualan;

        $detailpenjualans->firstProduknama    = $request->firstProduknama;
        $detailpenjualans->firstProdukdesc    = $request->firstProdukdesc;
        $detailpenjualans->firstProdukstok    = $request->firstProdukstok;
        $detailpenjualans->firstProdukharga         = $request->firstProdukharga;
        $detailpenjualans->firstSupplierNama        = $request->firstSupplierNama;
        $detailpenjualans->firstKategoriNama        = $request->firstKategoriNama;
        $detailpenjualans->jumlah                   = $request->jumlah;
        $detailpenjualans->totalHarga               = $request->firstProdukharga*$request->jumlah;

        $detailpenjualans->save();


        $total = DB::table('detail_penjualans as dp')
        ->select(DB::raw('sum(dp.totalHarga) as total'))
        ->where('idPenjualan','=',$request->idPenjualan)
        ->get();
        $totalpresjson = json_decode($totalpres,true);

        $penjualans = new Penjualan();
        
        $penjualans->idKaryawan     = $request->idKaryawan;
        $penjualans->tglPenjualan   = $request->tglPenjualan;
        $penjualans->total_harga    = $total;

        $detailpenjualans->save();

        return response()->json('Penjualan Successfully Created!');
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
