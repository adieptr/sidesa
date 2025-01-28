@extends('layout')

@section('konten')

<h4 class="mt-2 mb-2">Tambah Siswa</h4>

<form action="{{ route('siswa.submit') }}" method="post">
    @csrf
    <label> Nama </label>
    <input type="text" name="nama" class="form-control mb-2">
    <label> NIM </label>
    <input type="text" name="nim" class="form-control mb-2">
    <label> Alamat </label>
    <input type="text" name="alamat" class="form-control mb-2">
    <label> Jenis Kelamin </label>
    <input type="text" name="gender" class="form-control mb-2">
    <label> Agama </label>
    <input type="text" name="agama" class="form-control mb-2">

    <button class="btn btn-primary">Submit</button>

</form>

@endsection
