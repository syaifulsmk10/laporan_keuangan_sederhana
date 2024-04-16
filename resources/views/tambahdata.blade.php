@extends('layout.admin')

@section('content')
      <body>
    <h1 class= "text-center mb-4">TAMBAH DATA KEUANGAN</h1>

    <div class="container">
        <div class="row justify-content-center">
             <div class="col-8">
              <div class="card">
              <div class="card-body">
                <form action="/insertdata" method= "POST" enctype="multipart/form-data">
                  @csrf
                     
                     
                      
                      <div class="mb-3">  
                        <label for="exampleInputEmail1" class="form-label">PEMASUKAN</label>
                        <input type="number" name="pemasukan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                      </div>


                      
                       



                      

                      <div class="mb-3">  
                        <label for="exampleInputEmail1" class="form-label">MODAL</label>
                        <input type="number" name="modal" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                      </div>

                       

                       <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">KATEGORI</label>
                            <select class="form-select" name="kategori" aria-label="Default select example">
                              <option selected>PILIH KATEGORI</option>
                              <option value="1">JUAL APK</option>
                              <option value="2">JUAL PC</option>
                              <option value="3">LAINNYA</option>
      
                            </select>
                      </div>

                      <div class="mb-3">  
                        <label for="exampleInputEmail1" class="form-label">MASUKAN FOTO</label>
                        <input type="file" name="foto" class="form-control">
                      </div>

                      <button type="submit" class="btn btn-primary">Submit</button>
                    </form> 
                </div>
              </div>                
        </div>
             </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    -->
  </body>
@endsection


















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
    <h1 class= "text-center mb-4">TAMBAH DATA KEUANGAN</h1>

    <div class="container">
        <div class="row justify-content-center">
             <div class="col-8">
              <div class="card">
              <div class="card-body">
                <form action="/insertdata" method= "POST" enctype="multipart/form-data">
                  @csrf
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">TANGGAL</label>
                        <input type="text" name="tanggal" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                      </div>
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">KATEGORI</label>
                            <select class="form-select" name="kategori" aria-label="Default select example">
                              <option selected>PILIH KATEGORI</option>
                              <option value="1">LAINNYA</option>
                              <option value="2">JUAL APK</option>
                              <option value="3">TUKAR TAMBAH</option>
                              <option value="4">JUAL PC</option>
                            </select>
                      </div>
                      
                      <div class="mb-3">  
                        <label for="exampleInputEmail1" class="form-label">PEMASUKAN</label>
                        <input type="number" name="pemasukan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                      </div>

                      <div class="mb-3">  
                        <label for="exampleInputEmail1" class="form-label">MASUKAN FOTO</label>
                        <input type="file" name="foto" class="form-control">
                      </div>

                      <button type="submit" class="btn btn-primary">Submit</button>
                    </form> 
                </div>
              </div>                
        </div>
             </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    -->
  </body>
</html> --}}