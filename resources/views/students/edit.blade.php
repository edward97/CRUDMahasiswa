@extends('layouts.main')

@section('title', 'Form Edit Mahasiswa')

@section('container')
<div class="container">
  <h1 class="mt-3">Form Edit Data Mahasiswa</h1>

  <div class="row">
    <div class="col-8">
      <form method="POST" action="/students/{{ $student->id }}">
        @method('put')
        @csrf
        <div class="form-group">
          <label for="nama">Nama</label>
          <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" id="nama" value="{{ $student->nama }}" placeholder="Nama">

          @error('nama')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>

        <div class="form-group">
          <label for="nrp">NRP</label>
          <input type="text" name="nrp" class="form-control @error('nrp') is-invalid @enderror" id="nrp" value="{{ $student->nrp }}" placeholder="NRP">

          @error('nrp')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>

        <div class="form-group">
          <label for="email">Email</label>
          <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" id="email" value="{{ $student->email }}" placeholder="Email">

          @error('email')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>

        <div class="form-group">
          <label for="jurusan">Jurusan</label>
          <input type="text" name="jurusan" class="form-control @error('jurusan') is-invalid @enderror" id="jurusan" value="{{ $student->jurusan }}" placeholder="Jurusan">

          @error('jurusan')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>

        <button type="submit" class="btn btn-info">Update Data</button>
      </form>
    </div>
  </div>
</div>
@endsection
