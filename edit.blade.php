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
          {{-- <h1 class="m-0">Ubah Data Layanan Kesehatan Posyandu</h1> --}}
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            {{-- <li class="breadcrumb-item"><a href="{{ route('lakes.index') }}">Home</a></li> --}}
            {{-- <li class="breadcrumb-item active">Ubah Data Layanan</li> --}}
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<div class="container-fluid"> 
    <div class="row"> 
        <div class="col-md-12"> 
            <div class="card" style="margin-top: 10px;">
                <div class="card-header">
                    <div class="float-sm-left"> <p>Ubah Data Layanan</p> </div> 
                </div>
              <!-- /.card-header -->
                <div class="card-body">
                  <form class="form-horizontal" action="/lakes/edit/{{ $lakes->id_layanankesehatan }}" method="post"> {{ csrf_field() }} 
                    <input type="hidden" name="_method" value="POST"> 
                      <div class="form-group row"> 
                          <label class="control-label col-sm-2">Nama Layanan Kesehatan</label> 
                        <div class="col-sm-10"> 
                          <input type="text" class="form-control" name="nama_layanan" value="{{ $lakes->nama_layanan }}"> 
                        </div> 
                      </div>
                      <div class="form-group row"> 
                        <div class="col-sm-offset-2 col-sm-6"> 
                          <button type="submit" class="btn btn-outline-primary" onclick="return confirm('Yakin anda ingin mengubah data tersebut?')">Perbaharui Data</button> 
                          <a href="{{ route('lakes.index') }}" class="btn btn-outline-danger">Batal</a>
                        </div> 
                      </div> 
                    </form>
                </div>
            </div>
        </div> 
    </div> 
</div>
@endsection
