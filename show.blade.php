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
          {{-- <h1 class="m-0">Detail Data Layanan Kesehatan Posyandu</h1> --}}
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            {{-- <li class="breadcrumb-item"><a href="{{ route('lakes.index') }}">Home</a></li> --}}
            {{-- <li class="breadcrumb-item active">Detail Data Layanan</li> --}}
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
                    <div class="float-sm-left"> <p>Detail Data Layanan</p> </div> 
                </div> 
                <form class="form-horizontal">
                <div class="card-body"> {{ csrf_field() }}
                   <input type="hidden" name="_method" value="PUT">
                        <div class="form-group row"> 
                            <label class="col-sm-2">Nama Layanan</label> 
                            <div class="col-sm-10"> 
                                <p>{{ $lakes->nama_layanan }}</p>
                            </div> 
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-offset-2 col-sm-10"> 
                                <a href="{{ route('lakes.index') }}" class="btn btn-outline-danger">Kembali</a> 
                            </div> 
                        </div>
                </div>
                </form>
            </div> 
        </div> 
    </div> 
</div> 
@endsection
