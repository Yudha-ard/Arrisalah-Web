<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>AR-RISALAH | DASHBOARD</title>
  <link href="{{ url('backend/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ url('https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i') }}" rel="stylesheet">
  <link href="{{ url('backend/css/sb-admin-2.min.css') }}" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
  <script type="text/javascript">
        $('.js-tilt').tilt({
            scale: 1.1
        })
    </script>
</head>

<body id="page-top">

    <div id="wrapper">

    @include('layouts.sidebar')

      <div id="content-wrapper" class="d-flex flex-column">

        <div id="content">

          @include('layouts.topbar')

        <div class="container-fluid">
          <div class="container-fluid">
            <h1 class="h3 mb-2 text-gray-800">Galeri</h1>
              @if($errors->any())
                <div class="alert alert-danger">
                   <ul>
                      @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                      @endforeach
                   </ul>
                </div>
              @endif 
            <div class="card-body">
              
              <form method="post" action="{{ route('galeri.store') }}" enctype="multipart/form-data">

                 @csrf
                   <div class="form-group">
                      <label for="">Judul</label>
                        <div>
                          <input type="text" name="judul" class="form-control input-lg" value="{{ old('judul') }}">
                        </div>
                   </div>

                  <div class="form-group">
                      <label for="">Kategori</label>
                        <select name="kategori_id" id="" class="form-control">
                          @foreach ($kategori as $kt)
                            <option value="{{ $kt->id }}">{{ $kt->nama }}</option>
                          @endforeach
                        </select>    
                  </div>

                 <div class="form-group">
                    <label for="">Keterangan</label>
                      <div>
                        <textarea id="ckeditor" type="text" name="keterangan" rows="10" class="form-control input-lg">{{ old('keterangan') }}</textarea>
                      </div>
                 </div>

                 <div class="form-group">
                   <label for="">Gambar</label>
                    <div>
                      <input type="file" name="gambar" value="{{ old('gambar') }}">
                    </div>
                 </div>

                 <div class="form-group">
                  <input type="submit" name="add" class="btn btn-primary input-lg" value="Add" />
                 </div>

                </form>

              </div>
            </div>
          </div>
        </div>

    @include('layouts.footer')

      </div>

    </div>

  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fa-angle-up center"></i>
  </a>

  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Apakah Anda Ingin Keluar ?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Pilih Logout Untuk Keluar</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="{{ url('/') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
        </div>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
        </form>
      </div>
    </div>
  </div>

  <script src="{{ url('backend/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ url('backend/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ url('backend/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
  <script src="{{ url('backend/js/sb-admin-2.min.js') }}"></script>
  <script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
  <script>
      CKEDITOR.replace( 'ckeditor' );
  </script>
@include('sweet::alert')  
</body>

</html>

