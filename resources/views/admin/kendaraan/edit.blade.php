@extends('layouts.admin')

@section('content')

<div class="content">
<div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">EDIT KENDARAAN</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/kendaraan/{{$kendaraan->id}}/update" method="POST">
              @csrf
              <div class="card-body">
              
              <div class="form-group">
                    <label for="nama_kendaraan">Nama Kendaraan</label>
                    <input type="text" class="form-control" name="nama_kendaraan" id="exampleInputEmail1" placeholder="nama_kendaraan" value="{{$kendaraan->nama_kendaraan}}">
                  </div>
                  
                  <div class="form-group">
                    <label for="plat_nomer">Plat Nomer </label>
                    <input type="text" name="plat_nomer" class="form-control" placeholder="" value="{{$kendaraan->plat_nomer}}">
                  </div>

                  <div class="form-group">
                    <label for="merek">Merek</label>
                    <input type="text" class="form-control" name="merek" id="exampleInputEmail1" placeholder="merek" value="{{$kendaraan->merek}}">
                  </div>
                  
                  <div class="form-group">
                    <label for="warna">Warna</label>
                    <input type="text" class="form-control" name="warna" id="exampleInputEmail1" placeholder="warna" value="{{$kendaraan->warna}}">
                  </div>

                  <div class="form-group">
                    <label for="harga">Harga </label>
                    <input type="number" name="harga" class="form-control" placeholder="harga" value="{{$kendaraan->harga}}">
                  </div>

                  <div class="form-group">
                    <label for="jaminan_sewa">Jaminan Sewa</label>
                    <input type="text" class="form-control" name="jaminan_sewa" id="exampleInputEmail1" placeholder="jaminan sewa" value="{{$kendaraan->jaminan_sewa}}">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-warning">Update</button>
                  </div>
</div>
              </form>
            </div>
</div> 
@endsection