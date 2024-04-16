{{-- <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.rtl.min.css" integrity="sha384-WJUUqfoMmnfkBLne5uxXj+na/c7sesSJ32gI7GfCk4zO4GthUKhSEGyvQ839BC51" crossorigin="anonymous">

    <title>Crud cupu</title>
  </head>
  <body>
    <h1 class= "text-center mb-4">DATA KEUANGAN</h1>

    <div class="container">
       <a href="tambahdata"><button type="button" class="btn btn-success">TAMBAH +</button></a>
      
       <div class="row g-3 align-items-center mt-2">
  
  <div class="col-auto">
    <form action="/uang" method="GET">
    <input type="search" id="inputPassword6" name="search" class="form-control" aria-labelledby="passwordHelpInline">
    </form>
  </div>
  
</div>

      <div class="row">
          @if ($message = Session::get('success'))
              <div class="alert alert-success" role="alert">
                {{ $message }}
              </div>
              @else
                  
              @endif
                <table class="table">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">TANGGAL</th>
                    <th scope="col">FOTO</th>
                    <th scope="col">KATEGORI</th>
                    <th scope="col">PEMASUKAN</th>
                    <th scope="col">DIBUAT</th>
                    <th scope="col">AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $aw => $row)
                           <tr>
                    <th scope="row">{{ $aw + $data->firstItem() }}</th>
                    <td>{{ $row->tanggal }}</td>
                    <td>
                      <img src="{{ asset('fotopegawai/'.$row->foto) }}" alt="" style="width: 40px;">
                    </td>
                    <td>{{ $row->kategori }}</td>
                    <td>{{ $row->pemasukan }}</td>
                    <td>{{ $row->created_at->format('D M Y') }}</td>
                    <td>  
                        <a href="#" class="btn btn-danger delete" data-id="{{ $row->id }}"  data-kategori="{{ $row->kategori }}">DELETE</a>
                        <a href="/tampilkandata/{{ $row->id }}"><button type="button" class="btn btn-info">EDIT</button></a>
                    </td>
                    </tr>
                    <tr>
                    @endforeach
                 
                </tbody>

                </table>
               {{ $data->links() }}
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <script
  src="https://code.jquery.com/jquery-3.6.0.slim.js"
  integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY="
  crossorigin="anonymous"></script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    -->
  </body>
  <script>
    $('.delete').click( function(){
      

      var pegawaiid = $(this).attr('data-id');
      var kategori = $(this).attr('data-kategori');
                    swal({
              title: "Yakin?",
              text: "Kamu akan menghapus data pegawai dengan pemasukan "+kategori+" ",
              icon: "warning",
              buttons: true,
              dangerMode: true,
            })
            .then((willDelete) => {
              if (willDelete) {
                window.location = "/delete/"+pegawaiid+""
                swal("Data berhasil dihapus!", {
                  icon: "success",
                });
              } else {
                swal("Data tidak jadi dihapus!");
              }
            });        
    });


              
  </script>
</html> --}}
























































































































@extends('layout.admin')

@section('content')
  


    <div class="container">
       <a href="tambahdata"><button type="button" class="btn btn-success">TAMBAH +</button></a>
      
       <div class="row g-3 align-items-center mt-2">
</div>



        <div class="row">
          @if ($message = Session::get('success'))
              <div class="alert alert-success" role="alert">
                {{ $message }}
              </div>
              @else
                  
              @endif
                <table class="table">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">DIBUAT</th>
                    <th scope="col">FOTO</th>
                    <th scope="col">KATEGORI</th>
                    <th scope="col">PEMASUKAN</th>
                    <th scope="col">MODAL</th>
                    <th scope="col">KEUNTUNGAN</th>
                    <th scope="col">AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $aw => $row)

                           <tr>
                    <th scope="row">{{ $aw + $data->firstItem() }}</th>
                    <td>{{ $row->created_at->format('D M Y') }}</td>
                   
                    <td>
                      <img src="{{ asset('fotopegawai/'.$row->foto) }}" alt="" style="width: 40px;">
                    </td>
                    <td>{{ $row->kategori }}</td>
                    <td>{{ formatRupiah($row->pemasukan) }}</td>
                    <td>{{ formatRupiah($row->modal) }}</td>
                    
                     {{-- @if ($row->keuntungan == 0) --}}
                        <td>
                            {{ formatRupiah($row->pemasukan - $row->modal) }}
                        </td>
                    {{-- @else
                        <td>Kosong</td>
                    @endif
                      --}}

                    <td>  
                        <a href="#" class="btn btn-danger delete" data-id="{{ $row->id }}"  data-kategori="{{ $row->kategori }}">DELETE</a>
                        <a href="/tampilkandata/{{ $row->id }}"><button type="button" class="btn btn-info">EDIT</button></a>
                    </td>
                    </tr>
                    <tr>
                    @endforeach
                 
                </tbody>

                </table>
               {{ $data->links() }}
        </div>
    </div>
      </div>

       <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <script
  src="https://code.jquery.com/jquery-3.6.0.slim.js"
  integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY="
  crossorigin="anonymous"></script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    -->
  </body>
  <script>
    $('.delete').click( function(){
      

      var pegawaiid = $(this).attr('data-id');
      var kategori = $(this).attr('data-kategori');
                    swal({
              title: "Yakin?",
              text: "Kamu akan menghapus data pegawai dengan pemasukan "+kategori+" ",
              icon: "warning",
              buttons: true,
              dangerMode: true,
            })
            .then((willDelete) => {
              if (willDelete) {
                window.location = "/delete/"+pegawaiid+""
                swal("Data berhasil dihapus!", {
                  icon: "success",
                });
              } else {
                swal("Data tidak jadi dihapus!");
              }
            });        
    });


              
  </script>

@endsection