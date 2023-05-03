@extends('layouts.admin')

@section('content')

<div class="content">
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">TAMBAH RENTAL</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{url('/rental/store')}} "method="POST">
              @csrf
              <div class="card-body">
              
                  <div class="form-group">
                    <label for="id_pelanggan">pelanggan</label>
                    <input type="text" name="id_pelanggan"  class="form-control" placeholder="pelanggan">
                  </div>
                  
                  <div class="form-group">
                  </label for="id_pegawai">pegawai</label>
                  <input type="text" name="id_pegawai" class="form-control" placeholder ="pegawai">

                  <div class="form-group">
                  </label for="id_kendaraan">kendaraan</label>
                  <input type="text" name="id_kendaraan" class="form-control" placeholder ="kendaraan">
                  
</div>
                  <div class="form-group">
                  </label for="harga">harga</label>
                  <input type="text" name="harga" class="form-control" placeholder ="harga">
                  
                </div>
                <div class="form-group">
                    <label for="jaminan_sewa">jaminan sewa</label>
                    <input type="text" name="jaminan"  class="form-control" placeholder="sewa">
                  </div>
                <div class="form-group">
                  </label for="tanggalpinjam">tanggalpinjam</label>
                  <input type="Date" name="tanggalpinjam" class="form-control" placeholder ="tanggalpinjam">
                  
                </div>
                   <div class="form-group">
                  </label for="tanggalpengembalian">tanggal kembali</label>
                  <input type="Date" name="tanggalpengembalian" class="form-control" placeholder ="tanggalpengembalian">
                  
                </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-warning">Submit</button>
                  </div>
                  </div>
              </form>
            </div>
</div> 
@endsection