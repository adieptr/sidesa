@extends('layout')

@section('konten')

<h4 class="mt-2 mb-2">Edit Siswa</h4>

<form action="{{ route('siswa.update', $siswa->id) }}" method="post">
    @csrf
    <label> Nama </label>
    <input type="text" name="nama" value="{{ $siswa->nama }}" class="form-control mb-2">
    <label> NIM </label>
    <input type="text" name="nim" value="{{ $siswa->nim }}" class="form-control mb-2">
    <label> Alamat </label>
    <input type="text" name="alamat" value="{{ $siswa->alamat }}" class="form-control mb-2">
    <label> Jenis Kelamin </label>
    <input type="text" name="gender" value="{{ $siswa->gender }}" class="form-control mb-2">
    <label> Agama </label>
    <input type="text" name="agama" value="{{ $siswa->agama }}" class="form-control mb-2">

    <button class="btn btn-primary">Edit</button>

</form>

@endsection
