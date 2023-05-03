@extends('layouts.admin')

@section('content')


<did class="content">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Pegawai</h3>

                <div class="card-tools">
                <form action="/pegawai/search" class="form-inline" method="GET"></from>
                    <input type="search" name="search" class="form-control float-right" placeholder="Isikan Nama pegawai">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      
                      <th>Email</th>
                      <th>Password</th>
                      <th>Nama Pegawai</th>
                      <th>Alamat Pegawai</th>
                      <th>No tlpn</th>
                      <th>Opsi</th>
                      <th><a href="/pegawai/create/" class="btn btn-primary">Tambah</a></th>
                      
                    </tr>
                  </thead>
                  <tbody>

                  @foreach ($pegawai as $mereka)
                    <tr>
                      
                    <td>{{$mereka->email}}</td>
                    <td>{{$mereka->password}}</td>
                      <td>{{$mereka->namapegawai}}</td>
                      <td>{{$mereka->alamatpegawai}}</td>
                      <td>{{$mereka->no_tlpn}}</td>
                      
    
    
                      <td> <a href="/pegawai/{{$mereka->id}}/delete" class="btn btn-danger"onclick="return confirm ('apakah Yakin Dihapus? {{$mereka->namapegawai}}');"> Hapus </a>
                       <a href="/pegawai/{{$mereka->id}}/edit" class="btn btn-warning">Edit</a></td>
                       <td>
                       </td>
                    </tr>
                    @endforeach

                    
                  </tbody>

                  
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        @endsection
        </div>