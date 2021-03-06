@extends('layouts.main')

@section('title', 'Daftar Mahasiswa')

@section('container')
<div class="container">
  <h1 class="mt-3">Daftar Mahasiswa</h1>

  <a href="{{ url('students/create') }}" class="btn btn-primary my-2">New Student</a>

  @if (session('status'))
    <div class="alert alert-success">
      {{ session('status') }}
    </div>
  @endif

  <div class="row">
    <div class="col-6">
      <ul class="list-group">
        @foreach($students as $student)
        <li class="list-group-item d-flex justify-content-between align-items-center">
          {{ $student->nama }}

          <a href="{{ url('/students/'.$student->id) }}" class="badge badge-info">Detail</a>
        </li>
        @endforeach
      </ul>
    </div>
  </div>
</div>
@endsection
