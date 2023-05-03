@extends('layouts.admin')

@section('content')

<div class="content">
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambah Kendaraan</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{url('/kendaraan/store')}}" method="POST">
                  {{csrf_field()}}
                <div class="card-body">
                <div class="form-group">
                    <label for="nama_kendaraan">Nama Kendaraan</label>
                    <input type="text" class="form-control" name="nama_kendaraan" id="exampleInputEmail1" placeholder="nama kendaraan">
                  </div>
                  
                  <div class="form-group">
                    <label for="plat_nomer">Plat Nomer </label>
                    <input type="text" name="plat_nomer" class="form-control" placeholder="plat nomer">
                  </div>

                  <div class="form-group">
                    <label for="merek">Merek</label>
                    <input type="text" class="form-control" name="merek" id="exampleInputEmail1" placeholder="merek">
                  </div>
                  
                  <div class="form-group">
                    <label for="warna">Warna</label>
                    <input type="text" class="form-control" name="warna" id="exampleInputEmail1" placeholder="warna">
                  </div>

                  <div class="form-group">
                    <label for="harga">Harga </label>
                    <input type="number" name="harga" class="form-control" placeholder="harga">
                  </div>

                  <div class="form-group">
                    <label for="jaminan_sewa">Jaminan Sewa</label>
                    <input type="text" class="form-control" name="jaminan_sewa" id="" placeholder="jaminan sewa">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                </div>

              </form>

            </div>
@endsection