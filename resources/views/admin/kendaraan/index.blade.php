@extends('layouts.admin')

@section('content')


<did class="content">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Kendaraan</h3>

                <div class="card-tools">
                <form action="/kendaraan/search" class="form-inline" method="GET"></from>
                    <input type="search" name="search" class="form-control float-right" placeholder="Isikan Nama kendaraan">

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
                     
                      <th>Nama kendaraan</th>
                      <th>Plat nomer</th>
                      <th>Merek</th>
                      <th>Warna</th>
                      <th>Harga</th>
                      <th>Jaminan sewa</th>
                      <th>Opsi</th>
                      <th><a href="/kendaraan/create/" class="btn btn-primary">Tambah</a></th>
                    </tr>
                  </thead>
                  <tbody>

                  @foreach ($kendaraan as $dia)
                    <tr>
                      <td>{{$dia->nama_kendaraan}}</td>
                      <td>{{$dia->plat_nomer}}</td>
                      <td>{{$dia->merek}}</td>
                      <td>{{$dia->warna}}</td>
                      <td>{{$dia->harga}}</td>
                      <td>{{$dia->jaminan_sewa}}</td>
                      
    
    
                      <td> <a href="/kendaraan/{{$dia->id}}/delete" class="btn btn-danger"onclick="return confirm ('apakah Yakin Dihapus? {{$dia->nama_kendaraan}}');"> Hapus </a>
                       <a href="/kendaraan/{{$dia->id}}/edit" class="btn btn-warning">Edit</a></td>
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