@extends('layout.admin')

@section('content')
     
    
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
          <div class="col-12 col-sm-6 col-md-4">
            <div class="info-box mb-3" style="background: rgb(131,58,180);
                background: linear-gradient(90deg, rgba(131,58,180,1) 0%, rgba(253,29,29,1) 50%, rgba(252,176,69,1) 100%);" >
             

              <div class="info-box-content" >
                <span class="info-box-text">KEUNTUNGAN</span>
                <span class="info-box-number" style="font-size: 30px">{{ formatRupiah($jumlahkeuntungan) }}</span>
                <span class="info-box-number">19-02-2021</span>
                
                
              </div>                            
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>


          <div class="col-12 col-sm-6 col-md-4">
            <div class="info-box mb-3" style="background:background: rgb(34,193,195);
background: linear-gradient(0deg, rgba(34,193,195,1) 0%, rgba(253,187,45,1) 100%);" >
             

              <div class="info-box-content" >
                <span class="info-box-text">PEMASUKAN</span>
                <span class="info-box-number" style="font-size: 30px">{{ formatRupiah($jumlahpemasukan) }}</span>
                <span class="info-box-number">19-02-2021</span>
                
              </div>                            
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>

           <div class="col-12 col-sm-6 col-md-4">
            <div class="info-box mb-3" style="background: background: rgb(63,94,251);
              background: radial-gradient(circle, rgba(63,94,251,1) 0%, rgba(252,70,107,1) 100%);" >
             

              <div class="info-box-content" >
                <span class="info-box-text">MODAL</span>
                <span class="info-box-number" style="font-size: 30px">{{ formatRupiah($jumlahmodal) }}</span>
                <span class="info-box-number">19-02-2021</span>
                
              </div>                            
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>




          


          <!-- /.col -->
        </div>
        <!-- /.row -->


        


@endsection