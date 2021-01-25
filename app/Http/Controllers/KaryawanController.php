<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Karyawan;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $karyawans = Karyawan::all();

        return response()->json($karyawans);
        // $results = DB::select("SELECT * FROM users");
        // return view('karyawan',['karyawan' => $karyawan]);
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
        $karyawans = new Karyawan();

        $karyawans->name        = $request->name;
        $karyawans->email       = $request->email;
        $karyawans->password    = $request->password;

        $karyawans->save();

        return response()->json('Karyawan Successfully Created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $karyawans = Karyawan::find($id);

        return response()->json($karyawans);
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
        $karyawans = Karyawan::find($id);

        $karyawans->name = $request->name;
        $karyawans->email = $request->email;
        $karyawans->password = $request->password;

        $karyawans->save();

        return response()->json($karyawans);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $karyawans = Karyawan::find($id);
        
        $karyawans->delete();
        return response()->json('Karyawan Successfully Deleted!');
    }
}
