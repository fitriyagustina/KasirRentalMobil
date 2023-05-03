<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelanggan;

class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $pelanggan = Pelanggan::all();
        return view('admin.pelanggan.index', ['pelanggan'=>$pelanggan]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pelanggan.create');  
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
            'nama'   => 'required',
            'alamat'  => 'required',
            'no_tlpn'     => 'required',

        ]);

         Pelanggan::create([
            'nama'   => $request->nama,
            'alamat'  => $request->alamat,
            'no_tlpn'     => $request->no_tlpn,
         ]);
         return redirect('/pelanggan');

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
        $pelanggan = pelanggan::find($id);
        return view('admin.pelanggan.edit',['pelanggan'=>$pelanggan]);
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
            'nama'   => 'required',
            'alamat'   => 'required',
            'no_tlpn'   => 'required'
        ]);
        $pelanggan = Pelanggan::find($id);
        $pelanggan->nama = $request->nama;
        $pelanggan->alamat = $request->alamat;
        $pelanggan->no_tlpn = $request->no_tlpn;

        $pelanggan->save();

        return redirect('/pelanggan');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pelanggan = Pelanggan::find($id);
        $pelanggan->delete();

        return redirect()->back();
    
    }

    public function search(Request $request){
        if($request->has('search')){
            $pelanggan = Pelanggan::where('nama','LIKE','%'.$request->search.'%')->get();
        }
        else{
            $pelanggan = Pelanggan::all();
        }

        return view('admin.pelanggan.index',['pelanggan' => $pelanggan]);
    }
}