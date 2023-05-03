<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kendaraan;
class KendaraanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $kendaraan = Kendaraan::all();
        return view('admin.kendaraan.index', ['kendaraan'=>$kendaraan]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.kendaraan.create');  
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'nama_kendaraan'   => 'required',
            'plat_nomer'  => 'required',
            'merek'     => 'required',
            'warna'     => 'required',
            'harga'     => 'required',
            'jaminan_sewa'     => 'required',

        ]);

         Kendaraan::create([
            'nama_kendaraan'   => $request->nama_kendaraan,
            'plat_nomer'  => $request->plat_nomer,
            'merek'     => $request->merek,
            'warna'     => $request->warna,
            'harga'     => $request->harga,
            'jaminan_sewa'=> $request->jaminan_sewa,
        
         ]);
         return redirect('/kendaraan');

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
        $kendaraan = Kendaraan::find($id);
        return view('admin.kendaraan.edit',['kendaraan'=>$kendaraan]);
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
        $this->validate($request,[
            'nama_kendaraan'   => 'required',
            'plat_nomer'   => 'required',
            'merek'   => 'required',
            'warna'   => 'required',
            'harga'   => 'required',
            'jaminan_sewa'   => 'required'
        ]);
        //$kendaraan = Kendaraan::find($id);
        //$kendaraan->nama_kendaraan = $request->nama_kendaraan;
        //$kendaraan->plat_nomer = $request->plat_nomer;
        //$kendaraan->merek = $request->merek;
        //$kendaraan->warna = $request->warna;
        //$kendaraan->harga = $request->harga;
        //$kendaraan->jaminan_sewa = $request->jaminan_sewa;

        //$kendaraan->save();
        $kendaraan = Kendaraan::find($id);
        $kendaraan->update($request->all());

        return redirect('/kendaraan');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kendaraan = kendaraan::find($id);
        $kendaraan->delete();

        return redirect()->back();
    
    }

    public function search(Request $request){
        if($request->has('search')){
            $kendaraan = kendaraan::where('nama_kendaraan','LIKE','%'.$request->search.'%')->get();
        }
        else{
            $kendaraan = kendaraan::all();
        }

        return view('admin.kendaraan.index',['kendaraan' => $kendaraan]);
    }
    
}