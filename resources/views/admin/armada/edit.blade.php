<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>welcome</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('assets')}}/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('assets')}}/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
@include('admin.header') 
  <!-- /.navbar -->
  <!-- Main Sidebar Container -->
   @include('admin.sidebar')
  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Blank Page</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blank Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Title</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
        <form class="forms-sample" action="{{ url ('admin/jenis_kendaraan/update', $jenis_kendaraan->id) }}" method="POST">
          @csrf
          @method('put')
          <div class="form-group row">
              <label for="merk" class="col-sm-4 col-form-label">merk</label>
              <div class="col-sm-8">
                  <input type="text" class="form-control" id="merk" name="merk"
                      placeholder="Masukkan merk" value="{{ $armada->merk }}">
              </div>
          </div>
          <div class="form-group row">
              <label for="nopol" class="col-sm-4 col-form-label">nopol</label>
              <div class="col-sm-8">
                  <input type="text" class="form-control" id="nopol" name="nopol"
                      placeholder="Masukkan nopol" value="{{ $armada->nopol }}">
              </div>
          </div>
          <div class="form-group row">
              <label for="thn_beli" class="col-sm-4 col-form-label">tahun beli</label>
              <div class="col-sm-8">
                  <input type="text" class="form-control" id="merk" name="merk"
                      placeholder="Masukkan tahun beli" value="{{ $armada->thn_beli }}">
              </div>
          </div>
          <div class="form-group row">
              <label for="deskripsi" class="col-sm-4 col-form-label">deskripsi</label>
              <div class="col-sm-8">
                  <input type="text" class="form-control" id="deskripsi" name="deskripsi"
                      placeholder="Masukkan deskripsi" value="{{ $armada->deskripsi }}">
              </div>
          </div>
          <div class="form-group row">
              <label for="jenis_kendaraan_id" class="col-sm-4 col-form-label">id jenis kendaraan</label>
              <div class="col-sm-8">
                  <input type="text" class="form-control" id="jenis_kendaraan_id" name="jenis_kendaraan_id"
                      placeholder="Masukkan id jenis kendaraan" value="{{ $armada->jenis_kendaraan_id }}">
              </div>
          </div>
          <div class="form-group row">
              <label for="kapasitas_kursi" class="col-sm-4 col-form-label">kapasitas kursi</label>
              <div class="col-sm-8">
                  <input type="text" class="form-control" id="kapasitas_kursi" name="kapasitas_kursi"
                      placeholder="Masukkan kapasitas kursi" value="{{ $armada->kapasitas_kursi }}">
              </div>
          </div>
          <div class="form-group row">
              <label for="rating" class="col-sm-4 col-form-label">rating</label>
              <div class="col-sm-8">
                  <input type="text" class="form-control" id="rating" name="rating"
                      placeholder="Masukkan rating" value="{{ $armada->rating }}">
              </div>
          </div>
          <div class="form-group row">
              <div class="col-sm-4"></div>
              <div class="col-sm-8">
                  <button type="submit" class="btn btn-primary">Simpan</button>
                  <button type="reset" class="btn btn-warning">Reset</button>
              </div>
          </div>
      </form>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
   
  @include('admin.footer')
  
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('assets')}}/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('assets')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="{{asset('assets')}}/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('assets')}}/js/demo.js"></script>
</body>
</html>
