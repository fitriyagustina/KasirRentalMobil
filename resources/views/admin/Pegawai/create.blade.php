@extends('layouts.admin')

@section('content')

<div class="content">
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambah pegawai</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{url('/pegawai/store')}} "method="POST">
                @csrf
                <div class="card-body">
                <div class="form-group">
                    <label for="email">email</label>
                    <input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="email">
                  </div>

                  <div class="form-group">
                    <label for="password">password</label>
                    <input type="number" class="form-control" name="password" id="exampleInputEmail1" placeholder="password">
                  </div>

                <div class="form-group">
                    <label for="namapegawai">Namapegawai</label>
                    <input type="text" class="form-control" name="namapegawai" id="exampleInputEmail1" placeholder="namapegawai">
                  </div>
                  
                  <label for="alamatpegawai" class="from-label">alamatpegawai</label>
                  <div class="from-floating">
                    <textarea  name="alamatpegawai" id="floatingTextArea" class="form-control" placeholder="alamatpegawai"></textarea>    
                  </div>
                  <div class="form-group">
                  </label for="no_tlpn">no_tlpn</label>
                  <input type="number" name="no_tlpn" class="form-control" placeholder ="+62">
                  
</div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
</div>

              </form>

            </div>
              @endsection