@extends('layouts.admin')

@section('content')

<div class="content">
<div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">EDIT RENTAL</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/rental/{{$rental->id}}/update" method="POST">
              @csrf
              <div class="card-body">
              
                  <div class="form-group">
                    <label for="id_pelanggan">pelanggan</label>
                    <input type="text" class="form-control" name="id_pelanggan" id="exampleInputEmail1" placeholder="pelanggan" value="{{$rental->id_pelanggan}}">
                  </div>
                  
                  <div class="form-group">
                    <label for="id_pegawai">pegawai</label>
                    <input type="text" class="form-control" name="id_pegawai" id="exampleInputEmail1" placeholder="pegawai" value="{{$rental->id_pegawai}}">
                  </div>
                  <div class="form-group">
                  </label for="id_kendaraan">kendaraan</label>
                  <input type="text" name="id_kendaraan" class="form-control"  id="exampleInputEmail1" placeholder ="kendaraan" value="{{$rental->id_kendaraan}}">
                  
</div>
                  <div class="form-group">
                  </label for="harga">harga</label>
                  <input type="text" name="harga" class="form-control"  id="exampleInputEmail1" placeholder ="harga" value="{{$rental->harga}}">
                  
                </div>
                <div class="form-group">
                    <label for="jaminan_sewa">jaminan sewa</label>
                    <input type="text" class="form-control" name="jaminan" id="exampleInputEmail1" placeholder="sewa" value="{{$rental->jaminan_sewa}}">
                  </div>
                <div class="form-group">
                  </label for="tanggalpinjam">tanggalpinjam</label>
                  <input type="Date" name="tanggalpinjam" class="form-control" placeholder ="" value="{{$rental->tanggalpinjam}}">
                  
                </div>
                   <div class="form-group">
                  </label for="tanggalpengembalian">tanggal kembali</label>
                  <input type="Date" name="tanggalpengembalian" class="form-control" placeholder ="" value="{{$rental->tanggalpengembalian}}">
                  
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