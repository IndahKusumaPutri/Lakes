@extends("layouts.app")
@section("menu","master")
@section("submenu","lakes")
@section('title','Layanan Kesehatan')
@section("content")
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          {{-- <h1 class="m-0">Tambah Data Layanan Kesehatan Posyandu</h1> --}}
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            {{-- <li class="breadcrumb-item"><a href="{{ route('lakes.index') }}">Home</a></li> --}}
            {{-- <li class="breadcrumb-item active">Tambah Data Layanan</li> --}}
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<div class="content">
    <div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card" style="margin-top: 10px">
            <div class="panel panel-default">
                <div class="card-header">
                    <!--/.card-header -->
                    <div class="card-body table-responsive p-0">
                        <div class="container-fluid"> 
                            <div class="row"> 
                                <div class="col-md-12">
                                    <div class="card" style="margin-top: 10px;">
                                        <div class="card-header">
                                            <div class="float-sm-left"> <p>Tambah Data Layanan</p> </div> 
                                        </div>
                                      <!-- /.card-header -->
                                        <div class="card-body">
                                            <form class="form-horizontal" action="/lakes/store" method="post"> {{ csrf_field() }} 
                                                <div class="form-group row">
                                                    <label class="control-label col-sm-3">Nama Layanan Kesehatan</label> 
                                                     <div class="col-sm-9"> 
                                                        <input type="text" class="form-control" name="nama_layanan"> 
                                                        @if($errors->has('nama_layanan'))
                                                        <div class="text-danger">
                                                            {{ $errors->first('nama_layanan')}}
                                                        </div>
                                                    @endif
                                                     </div> 
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-sm-offset-5 col-sm-6"> 
                                                        <p><button type="submit" class="btn btn-outline-primary" onclick="return confirm('Yakin anda ingin menyimpan data tersebut?')">Simpan</button>
                                                        <a href="{{ route('lakes.index') }}" class="btn btn-outline-danger">Kembali</a>
                                                    </div> 
                                                </div> 
                                            </form>
                                        </div>
                                    </div>  
                                </div> 
                            </div> 
                        </div> 
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
    </div>
</div>
@endsection
