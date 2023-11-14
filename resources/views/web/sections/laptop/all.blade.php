@extends('web.main')

@section('content')
  <table class="table my-4 table-bordered table-hover">
    <thead class="thead-dark">
      <tr>
        <th scope="col" class="text-center align-middle bg-dark text-white">#</th>
        <th scope="col" class="text-center align-middle bg-dark text-white">Foto</th>
        <th scope="col" class="text-center align-middle bg-dark text-white">Nama</th>
        <th scope="col" class="text-center align-middle bg-dark text-white">CPU</th>
        <th scope="col" class="text-center align-middle bg-dark text-white">GPU</th>
        <th scope="col" class="text-center align-middle bg-dark text-white">Aksi</th>
      </tr>
    </thead>
    <tbody>
      @foreach($laptops as $laptop)
        <tr>
          <th scope="row" class="text-center align-middle">{{ $loop->iteration }}</th>
          <td class="text-center align-middle w-25">
            <img src="{{ $laptop->gambar }}" alt="" class="w-100">
          </td>
          <td class="text-center align-middle">{{ $laptop->nama }}</td>
          <td class="text-center align-middle">{{ $laptop->cpu }}</td>
          <td class="text-center align-middle">{{ $laptop->gpu }}</td>
          <td class="text-center align-middle">
            <a type="button" class="btn btn-info mx-1" href="/laptop/{{ $laptop->id }}">Detail</a>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>

@endsection
