<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rental</title>
    <style>
         body {
            display: flex;
            justify-content: center;
            padding: 2rem;
         }
        table {
            border: 1px solid black;
            width: 100%;
            background-color: #f1f1f1;
        }

        table thead th {
            border-bottom: 1px solid black;
            padding: 0.5rem 0.2rem;
            text-transform: Uppercase;
            font-size: 0.7rem;
        }

        table tbody {
            background-color: white;
        }

        table tbody tr td {
            text-align:center;
            padding: 0.5rem 0.2rem;
        }
    </style>
</head>
<body>
    <table class="">
                  <thead>
                    <tr>
                      
                      
                      <th>pelanggan</th>
                      <th>pegawai</th>
                      <th>kendaraan</th>
                      <th>harga</th>
                      <th>jaminan sewa</th>
                      <th>tanggal pinjam</th>
                      <th>tanggal kembali</th>
                      
                      
                      
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
                      
    
    
                    
                       </td>
                    </tr>
                    @endforeach

                    
                  </tbody>

                  
                </table>
</body>
</html>