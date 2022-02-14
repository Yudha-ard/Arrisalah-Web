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
  <link rel="stylesheet" type="text/css" href="{{ url('assets/sweetalert/sweetalert.css') }}">
  <script type="text/javascript" src="{{ url('assets/sweetalert/sweetalert.min.js') }}"></script>
  <script type="text/javascript">
        $('.js-tilt').tilt({
            scale: 1.1
        })
    </script>
</head>

<body id="page-top">
     <script>
      @if (session('delete'))
          swal('Sukses !', '{{ session('delete') }}', 'success');
      @endif
      @if (session('create'))
          swal('Sukses !', '{{ session('create') }}', 'success');
      @endif
      @if (session('edit'))
          swal('Sukses !', '{{ session('edit') }}', 'success');
      @endif
    </script>
    <div id="wrapper">

    @include('layouts.sidebar')

      <div id="content-wrapper" class="d-flex flex-column">

        <div id="content">

          @include('layouts.topbar')

        <div class="container-fluid">
          <div class="container-fluid">
            <h1 class="h3 mb-2 text-gray-800">Kegiatan</h1>
              <div class="card shadow mb-4">
                <div class="col-sm-12 col-md-12 mt-3">
                  <a href="{{  route('kegiatan.create') }}" class="btn btn-success btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fa fa-plus"></i>
                    </span>
                    <span class="text">Tambah Data</span>
                  </a>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>Gambar</th>
                          <th>Judul</th>
                          <th>Keterangan</th>
                          <th>Edit</th>
                          <th>Hapus</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($data as $row)
                           <tr>
                            <td><img src="{{ URL::to('/') }}/img/kegiatan_img/{{ $row->gambar }}" class="img-thumbnail" width="75" /></td>
                            <td>{{ $row->judul }}</td>
                            <td>{!! html_entity_decode(str_limit($row->keterangan, 10, ' ...')) !!}</td>
                            <td>
                                <a href="{{ route('kegiatan.edit', $row->id) }}" class="btn btn-sm btn-primary">Edit</a>
                            </td>
                            <td>    
                                    <form class="" action="{{ route('kegiatan.destroy', $row->id) }}" method="post">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                </form>
                            </td>
                          </tr>
                         @endforeach
                      </tbody>
                    </table>
                    {{ $data->links() }}
                  </div>
                </div>
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
 @include('sweet::alert')
</body>

</html>

