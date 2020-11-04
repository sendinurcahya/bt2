@extends('layouts.user')

@section('content')
<div class="container">
    <h1 align="center">Selamat Datang</h1>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table mt-4">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Kontak</th>
                        <th>Asal Tempat</th>
                        <th>Jenis Kelamin</th>
                        <th>Tujuan</th>
                        <th>Deskripsi</th>
                        <td>Aksi</td>
                    </tr>
                    </thead>
                    <tbody>
                        @php $no = 1 @endphp
                        @foreach($daftar as $d)
                        <tr>
                        <td>{{ $no ++ }}</td>
                        <td>{{ $d->nama }}</td>
                        <td>{{ $d->kontak }}</td>
                        <td>{{ $d->asal_tempat }}</td>
                        <td>{{ $d->jenis_kelamin }}</td>
                        <td>{{ $d->tujuan }}</td>
                        <td>{{ $d->deskripsi }}</td>
                        <td>
                            <a href="/delete/{{ $d->id }}" class="btn btn-danger">Hapus</a>
                        </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
