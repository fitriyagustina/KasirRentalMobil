@extends('layouts.admin')

@section('content')

<div class="content">
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambah PELANGGAN</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{url('/pelanggan/store')}} "method="POST">
                @csrf
                <div class="card-body">
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" name="nama" id="exampleInputEmail1" placeholder="nama">
                  </div>
                  
                  <label for="alamat" class="from-label">Alamat</label>
                  <div class="from-floating">
                    <textarea name="alamat" id="floatingTextArea" class="form-control" placeholder="Alamat"></textarea>    
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