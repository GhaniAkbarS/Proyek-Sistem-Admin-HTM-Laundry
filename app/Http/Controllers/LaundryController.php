<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;
use DB;


class LaundryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=DB::select(DB::raw("select * from pakaian"));
        return view('pakaian.index', compact('data'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pakaian.create');
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
            'id_pelanggan' => 'required',
            'jenis_pakaian' => 'required',
            'jumlah_pakaian' => 'required'
        ]);


        //input data

            DB::insert("INSERT INTO `pakaian` (`id_pakaian`,`id_pelanggan`, `jenis_pakaian`,`jumlah_pakaian`) VALUES (uuid(), ?, ?, ?)",
           [$request->id_pelanggan,$request->jenis_pakaian,$request->jumlah_pakaian]);
            return redirect()->route('pakaian.index')->with(['success' => 'Data Berhasil Disimpan!']);


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
        $data=DB::table('pakaian')->where('id_pakaian',$id)->first();
        return view('pakaian.edit', compact('data'));
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
            'id_pelanggan' => 'required',
            'jenis_pakaian' => 'required',
            'jumlah_pakaian' => 'required'
        ]);
        $pakaian = DB::table('pakaian')->where('id_pakaian', $id)->first();
        if (!$pakaian) {
            return redirect()->route('pakaian.index')->with(['error' => 'Data tidak ditemukan!']);
        }
        DB::table('pakaian')
        ->where('id_pakaian', $id)
        ->update([
            'id_pelanggan' => $request->id_pelanggan,
            'jenis_pakaian' => $request->jenis_pakaian,
            'jumlah_pakaian' => $request->jumlah_pakaian
        ]);
        return redirect()->route('pakaian.index')->with(['success' => 'Data Berhasil Diupdate!']);
   
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('pakaian')->where('id_pakaian', $id)->delete();


        //redirect to index
        return redirect()->route('pakaian.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}



