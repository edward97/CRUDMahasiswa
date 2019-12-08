@extends('layouts.main')

@section('title', 'Daftar Mahasiswa')

@section('container')
<div class="container">
  <h1 class="mt-3">Daftar Mahasiswa</h1>

  <table class="table table-sm">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nama</th>
        <th scope="col">NRP</th>
        <th scope="col">Email</th>
        <th scope="col">Jurusan</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>

    <tbody>
      @foreach($mahasiswa as $mhs)
      <tr>
        <th scope="row">{{ $loop->iteration }}</th>
        <td>{{ $mhs->nama }}</td>
        <td>{{ $mhs->nrp }}</td>
        <td>{{ $mhs->email }}</td>
        <td>{{ $mhs->jurusan }}</td>
        <td>
          <a href="" class="badge badge-success">Edit</a>
          <a href="" class="badge badge-danger">Delete</a>
        </td>
      </tr>
      @endforeach
      <tr>
      </tr>
    </tbody>
  </table>
</div>
@endsection
