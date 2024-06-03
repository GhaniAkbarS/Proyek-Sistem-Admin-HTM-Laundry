<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;
use DB;


class transaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=DB::select(DB::raw("select * from transaksi"));
        return view('transaksi.index', compact('data'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('transaksi.create');
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
            'tgl_transaksi_masuk' => 'required',
            'no_pelanggan_transaksi' => 'required',
            'harga_transaksi' => 'required',
            'berat_transaksi' => 'required',
            'tgl_transaksi_selesai' => 'required',
            'status_transaksi' => 'required',
            'jenis' => 'required'
        ]);


        //input data

            DB::insert("INSERT INTO `transaksi` (`id`,`tgl_transaksi_masuk`, `no_pelanggan_transaksi`,`harga_transaksi`,`berat_transaksi`,`tgl_transaksi_selesai`,`status_transaksi`,`jenis`) VALUES (uuid(), ?, ?, ?, ?, ?, ?, ?)",
           [$request->tgl_transaksi_masuk,$request->no_pelanggan_transaksi,$request->harga_transaksi,$request->berat_transaksi,$request->tgl_transaksi_selesai,$request->status_transaksi,$request->jenis]);
            return redirect()->route('transaksi.index')->with(['success' => 'Data Berhasil Disimpan!']);


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
        $data=DB::table('transaksi')->where('id',$id)->first();
        return view('transaksi.edit', compact('data'));
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
            'tgl_transaksi_masuk' => 'required',
            'no_pelanggan_transaksi' => 'required',
            'harga_transaksi' => 'required',
            'berat_transaksi' => 'required',
            'tgl_transaksi_selesai' => 'required',
            'status_transaksi' => 'required',
            'jenis' => 'required'
        ]);
        $transaksi = DB::table('transaksi')->where('id', $id)->first();
        if (!$transaksi) {
            return redirect()->route('transaksi.index')->with(['error' => 'Data tidak ditemukan!']);
        }
        DB::table('transaksi')
        ->where('id', $id)
        ->update([
            'tgl_transaksi_masuk' => $request->tgl_transaksi_masuk,
            'no_pelanggan_transaksi' => $request->no_pelanggan_transaksi,
            'harga_transaksi' => $request->harga_transaksi,
            'berat_transaksi' => $request->berat_transaksi,
            'tgl_transaksi_selesai' => $request->tgl_transaksi_selesai,
            'status_transaksi' => $request->status_transaksi,
            'jenis' => $request->jenis
        ]);
        return redirect()->route('transaksi.index')->with(['success' => 'Data Berhasil Diupdate!']);
   
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('transaksi')->where('id', $id)->delete();


        //redirect to index
        return redirect()->route('transaksi.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}



