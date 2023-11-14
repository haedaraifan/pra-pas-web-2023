@extends('web.main')

@section('content')
  <h2>Detail</h2>
  <div class="form my-4">
    <div class="form-group my-1 text-center bg-light p-4">
      <img src="{{ $handphone->gambar }}" alt="" class="img-fluid w-25" style="max-width: 100%; height: auto;" disabled>
    </div>

    <div class="form-group my-1">
      <label for="">Nama</label>
      <input type="text" class="form-control" name="nama" id="nama" value="{{ $handphone->nama }}" disabled>
    </div>

    <div class="form-group my-1">
      <label for="">Berat</label>
      <input type="text" class="form-control" name="berat" id="berat" value="{{ $handphone->berat }}" disabled>
    </div>

    <div class="form-group my-1">
      <label for="">OS</label>
      <input type="text" class="form-control" name="os" id="os" value="{{ $handphone->os }}" disabled>
    </div>

    <div class="form-group my-1">
      <label for="">Chipset</label>
      <input type="text" class="form-control" name="chipset" id="chipset" value="{{ $handphone->chipset }}" disabled>
    </div>

    <div class="form-group my-1">
      <label for="">internal</label>
      <input type="text" class="form-control" name="internal" id="internal" value="{{ $handphone->internal }}" disabled>
    </div>

    <div class="form-group my-1">
      <label for="">Tanggal Rilis</label>
      <input type="text" class="form-control" name="tgl_rilis" id="tgl_rilis" value="{{ $handphone->tgl_rilis }}" disabled>
    </div>
  </div>
@endsection