@extends('web.main')

@section('content')

<table class="table my-4 table-bordered table-hover">
  <thead class="thead-dark">
    <tr>
      <th scope="col" class="text-center align-middle bg-dark text-white">#</th>
      <th scope="col" class="text-center align-middle bg-dark text-white">Foto</th>
      <th scope="col" class="text-center align-middle bg-dark text-white">Nama</th>
      <th scope="col" class="text-center align-middle bg-dark text-white">Ukuran</th>
      <th scope="col" class="text-center align-middle bg-dark text-white">Warna</th>
      <th scope="col" class="text-center align-middle bg-dark text-white">Aksi</th>
    </tr>
  </thead>
  <tbody>
    @foreach($smartWatches as $smartWatch)
      <tr>
        <th scope="row" class="text-center align-middle">{{ $loop->iteration }}</th>
        <td class="text-center align-middle w-25">
          <img src="{{ $smartWatch->gambar }}" alt="" class="w-100">
        </td>
        <td class="text-center align-middle">{{ $smartWatch->nama }}</td>
        <td class="text-center align-middle">{{ $smartWatch->ukuran }}</td>
        <td class="text-center align-middle">{{ $smartWatch->warna }}</td>
        <td class="text-center align-middle">
          <a type="button" class="btn btn-info mx-1" href="/smartwatch/{{ $smartWatch->id }}">Detail</a>
        </td>
      </tr>
    @endforeach
  </tbody>
</table>

@endsection
