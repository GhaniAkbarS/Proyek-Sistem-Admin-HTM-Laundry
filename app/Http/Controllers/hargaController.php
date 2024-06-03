<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use DB;

class hargaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::select(DB::raw("SELECT * FROM harga"));
        return view('harga.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('harga.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    $this->validate($request, [
        'harga_perkilo' => 'required',
        'jenis' => 'required'
    ]);

    DB::insert("INSERT INTO `harga` (`id_harga`,`harga_perkilo`,`jenis`) VALUES (uuid(), ?, ?)",
    [$request->harga_perkilo,$request->jenis]);
     return redirect()->route('harga.index')->with(['success' => 'Data Berhasil Disimpan!']);


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // You can implement this method if needed
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = DB::table('harga')->where('id_harga', $id)->first();
        return view('harga.edit', compact('data'));
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
        $this->validate($request, [
            'harga_perkilo' => 'required',
            'jenis' => 'required'
        ]);
        $harga = DB::table('harga')->where('id_harga', $id)->first();
        if (!$harga) {
            return redirect()->route('harga.index')->with(['error' => 'Data tidak ditemukan!']);
        }
        DB::table('harga')
            ->where('id_harga', $id)
            ->update([
                'harga_perkilo' => $request->harga_perkilo,
                'jenis' => $request->jenis
            ]);
            return redirect()->route('harga.index')->with(['success' => 'Data Berhasil Diupdate!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('harga')->where('id_harga', $id)->delete();

        // Redirect to the index
        return redirect()->route('harga.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
