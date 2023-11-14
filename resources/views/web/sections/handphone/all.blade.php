@extends('web.main')

@section('content')
  <table class="table my-4 table-bordered table-hover">
    <thead>
      <tr>
        <th scope="col" class="text-center align-middle bg-dark text-white">#</th>
        <th scope="col" class="text-center align-middle bg-dark text-white">Foto</th>
        <th scope="col" class="text-center align-middle bg-dark text-white">Nama</th>
        <th scope="col" class="text-center align-middle bg-dark text-white">Chipset</th>
        <th scope="col" class="text-center align-middle bg-dark text-white">Internal</th>
        <th scope="col" class="text-center align-middle bg-dark text-white">Aksi</th>
      </tr>
    </thead>
    <tbody>
      @foreach($handphones as $handphone)
        <tr>
          <th scope="row" class="text-center align-middle">{{ $loop->iteration }}</th>
          <td class="text-center align-middle w-25">
            <img src="{{ $handphone->gambar }}" alt="" class="w-100">
          </td>
          <td class="text-center align-middle">{{ $handphone->nama }}</td>
          <td class="text-center align-middle">{{ $handphone->chipset }}</td>
          <td class="text-center align-middle">{{ $handphone->internal }}</td>
          <td class="text-center align-middle">
            <a type="button" class="btn btn-info mx-1" href="/handphone/{{ $handphone->id }}">Detail</a>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>

@endsection
