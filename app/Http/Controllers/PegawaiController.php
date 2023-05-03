<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pegawai;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pegawai = pegawai::all();
        return view('admin.pegawai.index',['pegawai'=>$pegawai]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pegawai.create');
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
            'email'   => 'required',
            'password'   => 'required',
            'namapegawai'   => 'required',
            'alamatpegawai'  => 'required',
            'no_tlpn'     => 'required',

        ]);

         pegawai::create([
            'email'   => $request->email,
            'password'   => $request->password,
            'namapegawai'   => $request->namapegawai,
            'alamatpegawai'  => $request->alamatpegawai,
            'no_tlpn'     => $request->no_tlpn,
         ]);
         return redirect('/pegawai');

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
        $pegawai = pegawai::find($id);
        return view('admin.pegawai.edit',['pegawai'=>$pegawai]);
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
            'email'   => 'required',
            'password'   => 'required',
            'namapegawai'   => 'required',
            'alamatpegawai'   => 'required',
            'no_tlpn'   => 'required'
        ]);
        $pegawai = Pegawai::find($id);
        $pegawai->email = $request->email;
        $pegawai->password = $request->password;
        $pegawai->namapegawai = $request->namapegawai;
        $pegawai->alamatpegawai = $request->alamatpegawai;
        $pegawai->no_tlpn = $request->no_tlpn;

        $pegawai->save();

        return redirect('/pegawai');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pegawai = pegawai::find($id);
        $pegawai->delete();

        return redirect()->back();
    }

    public function search(Request $request){
        if($request->has('search')){
            $pegawai = pegawai::where('namapegawai','LIKE','%'.$request->search.'%')->get();
        }
        else{
            $pegawai = pegawai::all();
        }

        return view('admin.pegawai.index',['pegawai' => $pegawai]);
    }
}

