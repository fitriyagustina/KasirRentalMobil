@extends('layouts.admin')

@section('content')

<div class="content">
<div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">EDIT PEGAWAI</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/pegawai/{{$pegawai->id}}/update" method="POST">
              @csrf
              <div class="card-body">
              <div class="form-group">
                    <label for="email">email</label>
                    <input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="email" value="{{$pegawai->email}}">
                  </div>

                  <div class="form-group">
                  <label for="password">password</label>
                    <input type="number" class="form-control" name="password" id="exampleInputEmail1" placeholder="password" value="{{$pegawai->password}}">
                  </div>

                  <div class="form-group">
                    <label for="namapegawai">NAMA</label>
                    <input type="text" class="form-control" name="namapegawai" id="exampleInputEmail1" placeholder="nama" value="{{$pegawai->namapegawai}}">
                  </div>
                  <div class="form-group">
                  <label for="alamatpegawai">Alamat</label>
                  <div class="from-floating">
                    <textarea name="alamatpegawai" id="floatingTextArea" class="form-control">{{$pegawai->alamatpegawai}}</textarea>
                  </div>
</div>
                  <div class="form-group">
                  </label for="no_tlpn">no_tlpn</label>
                  <input type="number" name="no_tlpn" class="form-control" placeholder ="+62" value="{{$pegawai->no_tlpn}}">
                  
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