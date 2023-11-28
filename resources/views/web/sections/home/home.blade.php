@extends('web.main')

@section('content')
<div class="container mt-4">
  <h1>Welcome to TechHub</h1>

  <section class="mt-4">
    <div class="row justify-content-between">
      <h2 class="col-auto">Latest Phones</h2>
      <a type="button" class="col-auto btn btn-info mx-1 text-center" href="/handphone">More</a>
    </div>
    <div class="row mt-4">
      @foreach ($handphones as $hanphone)
        <div class="col-md-6 mb-4 d-flex">
          <div class="card">
            <img src="{{ $hanphone->gambar }}" class="card-img-top w-100" alt="Phone 1">
            <div class="card-body">
              <h5 class="card-title">{{ $hanphone->nama }}</h5>
              <p class="card-text">{{ $hanphone->chipset }}</p>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </section>

  <section class="mt-4">
    <div class="row justify-content-between">
      <h2 class="col-auto">Latest Laptop</h2>
      <a type="button" class="col-auto btn btn-info mx-1 text-center" href="/laptop">More</a>
    </div>
    <div class="row mt-4">
      @foreach ($laptops as $laptop)
        <div class="col-md-6 mb-4 d-flex">
          <div class="card">
            <img src="{{ $laptop->gambar }}" class="card-img-top w-100" alt="Phone 1">
            <div class="card-body">
              <h5 class="card-title">{{ $laptop->nama }}</h5>
              <p class="card-text">{{ $laptop->cpu }}</p>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </section>

  <section class="mt-4">
    <div class="row justify-content-between">
      <h2 class="col-auto">Latest Smart Watch</h2>
      <a type="button" class="col-auto btn btn-info mx-1 text-center" href="/laptop">More</a>
    </div>
    <div class="row mt-4">
      @foreach ($smartWatches as $smartWatch)
        <div class="col-md-6 mb-4 d-flex">
          <div class="card">
            <img src="{{ $smartWatch->gambar }}" class="card-img-top w-100" alt="Phone 1">
            <div class="card-body">
              <h5 class="card-title">{{ $smartWatch->nama }}</h5>
              <p class="card-text">{{ $smartWatch->warna }}</p>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </section>
</div>
@endsection
