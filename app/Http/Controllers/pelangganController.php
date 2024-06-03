<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;
use DB;


class pelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=DB::select(DB::raw("select * from pelanggan"));
        return view('pelanggan.index', compact('data'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pelanggan.create');
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
            'nama_pelanggan' => 'required',
            'telp_pelanggan' => 'required',
            'alamat_pelanggan' => 'required',
            'id_pelanggan' => 'required'
        ]);


        //input data

            DB::insert("INSERT INTO `pelanggan` (`id`,`nama_pelanggan`, `telp_pelanggan`,`alamat_pelanggan`,`id_pelanggan`) VALUES (uuid(), ?, ?, ?, ?)",
           [$request->nama_pelanggan,$request->telp_pelanggan,$request->alamat_pelanggan,$request->id_pelanggan]);
            return redirect()->route('pelanggan.index')->with(['success' => 'Data Berhasil Disimpan!']);


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
        $data=DB::table('pelanggan')->where('id',$id)->first();
        return view('pelanggan.edit', compact('data'));
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
            'nama_pelanggan' => 'required',
            'telp_pelanggan' => 'required',
            'alamat_pelanggan' => 'required',
            'id_pelanggan' => 'required'
        ]);
        $pelanggan = DB::table('pelanggan')->where('id', $id)->first();
        if (!$pelanggan) {
            return redirect()->route('pelanggan.index')->with(['error' => 'Data tidak ditemukan!']);
        }
        DB::table('pelanggan')
        ->where('id', $id)
        ->update([
            'nama_pelanggan' => $request->nama_pelanggan,
            'telp_pelanggan' => $request->telp_pelanggan,
            'alamat_pelanggan' => $request->alamat_pelanggan,
            'id_pelanggan' => $request->id_pelanggan
        ]);
        return redirect()->route('pelanggan.index')->with(['success' => 'Data Berhasil Diupdate!']);
   
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('pelanggan')->where('id', $id)->delete();


        //redirect to index
        return redirect()->route('pelanggan.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}



