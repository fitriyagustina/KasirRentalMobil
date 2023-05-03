@extends('layouts.admin')

@section('content')


<did class="content">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Rental</h3> &nbsp;
                <a href="{{url('/downloadpdf')}}" target="_blank" class="btn btn-outline-info">Cetak Laporan </a>
                <div class="card-tools">
                <form action="/rental/search" class="form-inline" method="GET"></from>
                    <input type="search" name="search" class="form-control float-right" placeholder="Isikan Nama">

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
                      
                      
                      <th>pelanggan</th>
                      <th>pegawai</th>
                      <th>kendaraan</th>
                      <th>harga</th>
                      <th>jaminan sewa</th>
                      <th>tanggal pinjam</th>
                      <th>tanggal kembali</th>
                      <th>opsi</th>
                      <th><a href="/rental/create/" class="btn btn-primary">Tambah</a></th>
                      
                    </tr>
                  </thead>
                  <tbody>

                  @foreach ($rental as $mobil)
                    <tr>
                      
                    
                    <td>{{$mobil->pelanggan->nama}}</td>
                      <td>{{$mobil->pegawai->namapegawai}}</td>
                      <td>{{$mobil->kendaraan->nama_kendaraan}}</td>
                      <td>{{$mobil->kendaraan->harga}}</td>
                      <td>{{$mobil->kendaraan->jaminan_sewa}}</td>
                      <td>{{$mobil->tanggalpinjam}}</td>
                      <td>{{$mobil->tanggalpengembalian}}</td>
                      
    
    
                      <td> <a href="/rental/{{$mobil->id}}/delete" class="btn btn-danger"onclick="return confirm ('apakah Yakin Dihapus? {{$mobil->tanggalpinjam}}');"> Hapus </a>
                       <a href="/rental/{{$mobil->id}}/edit" class="btn btn-warning">Edit</a></td>
                       <td> <a href="/rental/{{$mobil->id}}/cetakstruk" class="btn  btn-outline-dark"onclick="return confirm ('apakah anda yakin mencetak struk ? {{$mobil->id_pelanggan}}');"> Cetak Struk </a>
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