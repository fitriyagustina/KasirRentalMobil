@extends('layouts.admin')

@section('content')

<div class="content">
<div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">EDIT PELANGGAN</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/pelanggan/{{$pelanggan->id}}/update" method="POST">
              @csrf
              <div class="card-body">
              
                  <div class="form-group">
                    <label for="nama">NAMA</label>
                    <input type="text" class="form-control" name="nama" id="exampleInputEmail1" placeholder="nama" value="{{$pelanggan->nama}}">
                  </div>
                  
                  <label for="alamat" class="from-label">Alamat</label>
                  <div class="from-floating">
                    <textarea name="alamat" id="floatingTextArea" class="form-control">{{$pelanggan->alamat}}</textarea>
                  </div>
                  <div class="form-group">
                  </label for="no_tlpn">no_tlpn</label>
                  <input type="number" name="no_tlpn" class="form-control" placeholder ="+62" value="{{$pelanggan->no_tlpn}}">
                  
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