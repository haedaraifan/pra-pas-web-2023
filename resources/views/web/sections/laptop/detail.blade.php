@extends('web.main')

@section('content')
  <h2>Detail</h2>
  <div class="form my-4 bg-light p-3">
  <div class="form-group my-1 text-center p-4">
      <img src="{{ $laptop->gambar }}" alt="" class="img-fluid w-25" style="max-width: 100%; height: auto;" disabled>
    </div>
    
    <div class="form-group my-1">
      <label for="">Nama</label>
      <input type="text" class="form-control" name="nama" id="nama" value="{{ $laptop->nama }}" disabled>
    </div>

    <div class="form-group my-1">
      <label for="">Berat</label>
      <input type="text" class="form-control" name="berat" id="berat" value="{{ $laptop->berat }}" disabled>
    </div>

    <div class="form-group my-1">
      <label for="">Layar</label>
      <input type="text" class="form-control" name="layar" id="layar" value="{{ $laptop->layar }}" disabled>
    </div>

    <div class="form-group my-1">
      <label for="">Cpu</label>
      <input type="text" class="form-control" name="cpu" id="cpu" value="{{ $laptop->cpu }}" disabled>
    </div>

    <div class="form-group my-1">
      <label for="">Gpu</label>
      <input type="text" class="form-control" name="gpu" id="gpu" value="{{ $laptop->gpu }}" disabled>
    </div>

    <div class="form-group my-1">
      <label for="">Ram</label>
      <input type="text" class="form-control" name="ram" id="ram" value="{{ $laptop->ram }}" disabled>
    </div>

    <div class="form-group my-1">
      <label for="">Storage</label>
      <input type="text" class="form-control" name="storage" id="storage" value="{{ $laptop->storage }}" disabled>
    </div>

    <div class="form-group my-1">
      <label for="">Tanggal Rilis</label>
      <input type="text" class="form-control" name="tgl_rilis" id="tgl_rilis" value="{{ $laptop->tgl_rilis }}" disabled>
    </div>
  </div>
@endsection