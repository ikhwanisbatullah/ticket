@extends('Admin/masterAdmin')

@section('judul_tab', 'Konten - AdminBLK')
    
@section('active_menu_kelola_konten', 'active')

@section('content')

        <div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Konten</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">Dashboard</a></li>
                                    <li><a href="#">Data Konten</a></li>
                                    <li class="active">Majalah</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="content">
            <!-- Animated -->
            <div class="animated fadeIn">
                <!-- Widgets  -->
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <form action="{{ url('/admin/dataKonten/konten/tambahKonten')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                                <div class="card-header">
                                    <strong class="card-title">Tambah Konten</strong>
                                </div>
                        
                                <div class="card-body">
                                    {{csrf_field()}}
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="judul_majalah" class=" form-control-label">Judul</label>
                                            <input type="text" id="judul_majalah" name="judul_majalah" placeholder="Masukkan Judul Majalah" class="form-control">
                                        </div>
                                    </div>
                        
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="kd_kategori_konten" class=" form-control-label">Kategori</label>
                                            <select name="kd_kategori_konten" id="kd_kategori_konten" class="form-control" required>
                                                <option value="">---Pilih Kategori---</option>
                                                @foreach($kategori_konten as $kategori)
                                                <option value="{{$kategori->kd_kategori_konten}}">{{$kategori->kategori_konten}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="foto" class=" form-control-label">Foto</label>
                                            <input type="file" id="foto" name="foto" class="form-control-file">
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="tgl_rilis" class=" form-control-label">Tanggal Rilis</label>
                                            <input readonly type="text" id="tgl_rilis" name="tgl_rilis" placeholder="Masukkan Tanggal Rilis" class="form-control" required>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="isi_majalah" class=" form-control-label">Isi Majalah</label>
                                            <textarea id="isi_majalah" name="isi_majalah" placeholder="Masukkan Isi Majalah" class="form-control" required>
                                            </textarea>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <button type="submit" class="btn btn-primary">Publikasikan</button> 
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="card">

                            <div class="card-header">
                                <strong class="card-title">Kelola Konten</strong>
                            </div>

                            <div class="card-body">

                                <!-- Modal Ubah Konten -->
                                <div class="modal fade" id="ubahKonten" tabindex="-1" role="dialog" aria-labelledby="smallModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h3 class="modal-title" id="mediumModalLabel"><strong>Ubah Konten</strong></h3>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>      
                                            <div class="modal-body">
                                                <form action="{{ url('/admin/dataKonten/konten/ubahKonten') }}" method="post" enctype="multipart/form-data" class="form-horizontal">
                                                    
                                                    {{ csrf_field()}}

                                                    <div class="col-lg-12" hidden>
                                                        <div class="form-group">
                                                            <label for="kd_konten" class=" form-control-label">Kode Konten</label>
                                                            <input type="text" id="kd_konten" name="kd_konten" class="form-control" readonly required>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label for="judul_konten" class=" form-control-label">Judul</label>
                                                            <input type="text" id="judul_konten" name="judul_konten" placeholder="Masukkan Judul Konten" class="form-control" required>
                                                        </div>
                                                    </div>
                                        
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label for="kd_kategori_konten" class=" form-control-label">Kategori</label>
                                                            <select name="kd_kategori_konten" id="kd_kategori_konten" class="form-control" required>
                                                                <option value="">---Pilih Kategori---</option>
                                                                @foreach($kategori_konten as $kategori)
                                                                <option value="{{$kategori->kd_kategori_konten}}">{{$kategori->kategori_konten}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label for="foto" class=" form-control-label">Foto</label>
                                                            <input type="file" id="foto" name="foto" accept="image/*" class="form-control-file">
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label for="tgl_rilis2" class=" form-control-label">Tanggal Rilis</label>
                                                            <input readonly type="text" id="tgl_rilis2" name="tgl_rilis2" placeholder="Masukkan Tanggal Rilis" class="form-control" required>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label for="isi_konten" class=" form-control-label">Isi Konten</label>
                                                            <textarea id="isi_konten" name="isi_konten" placeholder="Masukkan Isi Konten" class="form-control" required>
                                                            </textarea>
                                                        </div>
                                                    </div>

                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                                        <button type="submit" class="btn btn-primary">Ubah</button>
                                                    </div>
                                                </form>
                                            </div>    
                                        </div>
                                    </div>
                                </div>

                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Judul</th>
                                            <th>Kategori</th>
                                            <th>Tanggal Rilis</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($majalah as $majalah)
                                        <tr>
                                            <td>{{$i+=1}}</td>
                                            <td>{{$majalah->judul_majalah}}</td>
                                            <td>{{App\Models\KategoriKonten::where('kd_kategori_konten', $majalah->kd_kategori)->value('kategori_konten')}}</td>
                                            <td>{{$majalah->tgl_rilis}}</td>
                                            <td>
                                                <button type="button" class="btn btn-success btn-sm" 
                                                    data-target="#ubahKonten" 
                                                    data-toggle="modal"
                                                    data-kd_majalah="{{$majalah->kd_majalah}}"
                                                    data-judul_majalah="{{$majalah->judul_majalah}}"
                                                    data-isi_majalah="{{$majalah->isi_konten}}"
                                                    data-kd_kategori_konten="{{$majalah->kd_kategori}}"
                                                    data-tgl_rilis="{{$majalah->tgl_rilis}}">
                                                    <i class="fa fa-edit"></i>&nbsp; 
                                                    Ubah
                                                </button>
                                                <a href="/admin/dataKonten/konten/hapusKonten/{{$majalah->kd_majalah}}" type="button" class="btn btn-danger btn-sm">
                                                    <i class="fa fa-trash"></i>&nbsp;
                                                    Hapus
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script> 
    <script src="https://cdn.tiny.cloud/1/cn0rsfqf5862dtcrgnngsfyi4vmj1ketcg7q1gtaw5w115xh/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>tinymce.init({selector:'textarea', height: 300});</script>

    <script>
        $('#tgl_rilis').datetimepicker({
            format: 'dd mmmm yyyy HH:MM' ,
            uiLibrary: 'bootstrap4'
        });
    </script>

    <script>
        $('#tgl_rilis2').datetimepicker({
            format: 'dd mmmm yyyy HH:MM' ,
            uiLibrary: 'bootstrap4'
        });
    </script>

    <script type="text/javascript">
        $(document).ready(function(){
              $('#ubahKonten').on('show.bs.modal', function (event) {
              var button = $(event.relatedTarget);
              var kd_konten = button.data('kd_konten');
              var judul_konten = button.data('judul_konten');
              var isi_konten = button.data('isi_konten');
              var kd_kategori_konten = button.data('kd_kategori_konten');
              var tgl_rilis = button.data('tgl_rilis');
             
              tinymce.activeEditor.setContent(isi_konten)

              var modal = $(this);
              modal.find('.modal-body #kd_konten').val(kd_konten);
              modal.find('.modal-body #judul_konten').val(judul_konten);
              modal.find('.modal-body #kd_kategori_konten').val(kd_kategori_konten);
              modal.find('.modal-body #isi_konten').val(isi_konten);
              modal.find('.modal-body #tgl_rilis2').val(tgl_rilis);
            });
        }); 
    </script> 

@endsection