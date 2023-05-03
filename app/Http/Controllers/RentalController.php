<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rental;
use App\Models\Pelanggan;
use PDF;

class RentalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rental = Rental::with('pelanggan','pegawai','kendaraan')->get();
        // dd($rental);
        return view('admin.rental.index',['rental'=>$rental]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.rental.create');
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
            'id_pelanggan'=>'required',
            'id_pegawai'=>'required',
            'id_kendaraan'=>'required',
            'tanggalpinjam'   => 'required',
            'tanggalpengembalian'   => 'required',
        ]);

         Rental::create([
            'id_pelanggan'=>$request->id_pelanggan,
            'id_pegawai'=>$request->id_pegawai,
            'id_kendaraan'=>$request->id_kendaraan,
            'tanggalpinjam'   => $request->tanggalpinjam,
            'tanggalpengembalian'   => $request->tanggalpengembalian,
            
         ]);
         return redirect('/rental');

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
        $rental = Rental::find($id);
        return view('admin.rental.edit',['rental'=>$rental]);
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
            'id_pelanggan'=>'required',
            'id_pegawai'=>'required',
            'id_kendaraan'=>'required',
            'tanggalpinjam'   => 'required',
            'tanggalpengembalian'   => 'required',
    
        ]);
        $rental = Rental::find($id);
        $rental->id_pelanggan = $request->id_pelanggan;
        $rental->id_pegawai = $request->id_pegawai;
        $rental->id_kendaraan = $request->id_kendaraan;
        $rental->tanggalpinjam = $request->tanggalpinjam;
        $rental->tanggalpengembalian = $request->tanggalpengembalian;

        $rental->save();

        return redirect('/rental');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rental = Rental::find($id);
        $rental->delete();

        return redirect()->back();
    }

    public function search(Request $request){
        if($request->has('search')){
            $rental = Rental::where('tanggalpinjam','LIKE','%'.$request->search.'%')->get();
        }
        else{
            $rental = Rental::all();
        }

        return view('admin.rental.index',['rental' => $rental]);
    }

     // one to one relationship
     public function pelanggan(){
        $pelanggan = Pelanggan::all();
        return view('admin.rental.index',['pelanggan'=> $pelanggan]);
    }

    public function downloadpdf(){
        $rental = Rental::all();
        $pdf = PDF::loadview('admin.rental.export',['rental'=> $rental])->setOptions(['defaultFont' => 'sans-serif']);
        return $pdf->download('laporan_mobil.pdf');
    }

    public function cetakStruk(Rental $rental){
        $rental = collect([$rental]);
        $pdf = PDF::loadview('admin.rental.export',['rental'=> $rental])->setOptions(['defaultFont' => 'sans-serif']);
        return $pdf->download('laporan_mobil.pdf');
    }
}

