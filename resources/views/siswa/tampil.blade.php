@extends('layout')

@section('konten')



<div class="d-flex">
    <h4>Daftar Siswa</h4>
    <div class="ms-auto">
        <a class="btn btn-success" href="{{ route('siswa.tambah') }}">Tambah Siswa</a>
    </div>
</div>

<table class="table table-striped">
<tr>
    <th>No</th>
    <th>Nama</th>
    <th>NIM</th>
    <th>Alamat</th>
    <th>Jenis Kelamin</th>
    <th>Agama</th>
    <th>Aksi</th>
</tr>

@foreach ($siswa as $no=>$data )

    <tr>
        <td>{{ $no+1 }}</td>
        <td>{{ $data->nama }}</td>
        <td>{{ $data->nim }}</td>
        <td>{{ $data->alamat }}</td>
        <td>{{ $data->gender }}</td>
        <td>{{ $data->agama }}</td>
        <td>
            <div class="d-flex gap-2">
            <a href="{{ route('siswa.edit', $data->id) }}" class="btn btn-sm btn-warning">Edit</a>
            <form action="{{ route('siswa.delete', $data->id) }}" method="post">
                @csrf
                <button class="btn btn-sm btn-danger">Hapus</button>
            </form>
        </div>
        </td>
    </tr>

@endforeach
</table>
@endsection
