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
        <form class="forms-sample" action="{{ url('admin/peminjaman/store') }}" method="POST">
          @csrf
          <div class="form-group row">
              <label for="nama_peminjam" class="col-sm-4 col-form-label">nama peminjam</label>
              <div class="col-sm-8">
                  <input type="text" class="form-control" id="nama_peminjam" name="nama_peminjam"
                      placeholder="Masukkan nama kamu">
              </div>
          </div>
          <div class="form-group row">
              <label for="ktp_peminjam" class="col-sm-4 col-form-label">ktp peminjam</label>
              <div class="col-sm-8">
                  <input type="text" class="form-control" id="ktp_peminjam" name="ktp_peminjam"
                      placeholder="Masukkan no induk ktp kamu">
              </div>
          </div>
          <div class="form-group row">
              <label for="keperluan_pinjam" class="col-sm-4 col-form-label">keperluan pinjam</label>
              <div class="col-sm-8">
                  <input type="text" class="form-control" id="keperluan_pinjam" name="keperluan_pinjam"
                      placeholder="Masukkan pernyataan kamu">
              </div>
          </div>
          <div class="form-group row">
              <label for="mulai" class="col-sm-4 col-form-label">mulai</label>
              <div class="col-sm-8">
                  <input type="date" class="form-control" id="mulai" name="mulai"
                      placeholder="tanggal mulai pinjam">
              </div>
          </div>
          <div class="form-group row">
                <label for="selesai" class="col-sm-4 col-form-label">selesai</label>
                <div class="col-sm-8">
                    <input type="date" class="form-control" id="selesai" name="selesai"
                        placeholder="tanggal selesai pinjam">
                </div>
            </div>
          <div class="form-group row">
              <label for="biaya" class="col-sm-4 col-form-label">biaya</label>
              <div class="col-sm-8">
                  <input type="number" class="form-control" id="biaya" name="biaya"
                      placeholder="biaya pinjam">
              </div>
          </div>
          <div class="form-group row">
              <label for="armada_id" class="col-sm-4 col-form-label">id armada</label>
              <div class="col-sm-8">
                  <input type="number" class="form-control" id="armada_id" name="armada_id"
                      placeholder="masukan id armada kamu">
              </div>
          </div>
          <div class="form-group row">
              <label for="komentar_peminjam" class="col-sm-4 col-form-label">komentar peminjam</label>
              <div class="col-sm-8">
                  <input type="text" class="form-control" id="komentar_peminjam" name="komentar_peminjam"
                      placeholder="masukan komentar kamu">
              </div>
          </div>
          <div class="form-group row">
              <label for="status_pinjam" class="col-sm-4 col-form-label">status pinjam</label>
              <div class="col-sm-8">
                  <input type="text" class="form-control" id="status_pinjam" name="status_pinjam"
                      placeholder="status pinjam kamu">
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
