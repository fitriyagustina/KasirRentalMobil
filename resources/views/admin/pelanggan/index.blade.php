@extends('layouts.admin')

@section('content')
<div class="card">

<did class="content">
              <div class="card-header">
                <h3 class="card-title">Data pelanggan</h3>

                <div class="card-tools">
                  <form action="/pelanggan/search" class="form-inline" method="GET"></from>
                    <input type="search" name="search" class="form-control float-right" placeholder="Isikan Nama">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                    </form>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>Nama</th>
                      <th>Alamat</th>
                      <th>No Tlpn</th>
                      <th>Opsi</th>
                      <th><a href="/pelanggan/create" class="btn btn-primary">Tambah</a></th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach  ($pelanggan as $fitri)
                    <tr>
                      <td>{{$fitri->nama}}</td>
                      <td>{{$fitri->alamat}}</td>
                      <td>{{$fitri->no_tlpn}}</td>
    
                      <td> <a href="/pelanggan/{{$fitri->id}}/delete" class="btn btn-danger"onclick="return confirm ('apakah Yakin Dihapus? {{$fitri->nama}}');"> Hapus </a>
                       <a href="/pelanggan/{{$fitri->id}}/edit" class="btn btn-warning">Edit</a></td>
                       <td>
                       </td>
                    </tr>
                    @endforeach
                </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            @endsection
            </div>