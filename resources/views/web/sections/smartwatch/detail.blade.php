@extends('web.main')

@section('content')
  <h2>Detail</h2>
  <div class="form my-4 bg-light p-3">
  <div class="form-group my-1 text-center p-4">
      <img src="{{ $smartWatch->gambar }}" alt="" class="img-fluid w-25" style="max-width: 100%; height: auto;" disabled>
    </div>
    
    <div class="form-group my-1">
      <label for="">Nama</label>
      <input type="text" class="form-control" name="nama" id="nama" value="{{ $smartWatch->nama }}" disabled>
    </div>

    <div class="form-group my-1">
      <label for="">Berat</label>
      <input type="text" class="form-control" name="berat" id="berat" value="{{ $smartWatch->berat }}" disabled>
    </div>

    <div class="form-group my-1">
      <label for="">Ukuran</label>
      <input type="text" class="form-control" name="layar" id="layar" value="{{ $smartWatch->ukuran }}" disabled>
    </div>

    <div class="form-group my-1">
      <label for="">Baterai</label>
      <input type="text" class="form-control" name="cpu" id="cpu" value="{{ $smartWatch->baterai }}" disabled>
    </div>

    <div class="form-group my-1">
      <label for="">Tanggal Rilis</label>
      <input type="text" class="form-control" name="tgl_rilis" id="tgl_rilis" value="{{ $smartWatch->tgl_rilis }}" disabled>
    </div>
  </div>
@endsection