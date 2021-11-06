@extends('layouts.master')

@section('header')
<header class="d-flex align-items-center pb-3 mb-5 border-bottom">
    <a href="/supir" class="d-flex align-items-center text-dark text-decoration-none">
        <span class="fs-3">Data Supir</span>
    </a>
    <a href="/supir/create" class="btn btn-primary p-2 ms-auto">Create New Data</a>
</header>
@endsection

@section('main')
@if(session()->has('success'))
<div class="alert alert-success" role="alert">
    {{ session('success') }}
</div>
@endif
<table class="table table-responsive">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Nomor Telepon</th>
            <th>Nomor SIM</th>
            <th>Masa Berlaku SIM</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($supirs as $supir)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $supir->nama }}</td>
            <td>{{ $supir->no_telp }}</td>
            <td>{{ $supir->no_sim }}</td>
            <td>{{ $supir->masa_berlaku }}</td>
            <td>{{ $supir->status }}</td>
            <td>
                <form action="/supir/{{ $supir->id }}" method="post">
                    <a href="/supir/{{ $supir->id }}" class="badge bg-info">
                        <i data-feather="eye"></i>
                    </a>
                    <a href="/supir/{{ $supir->id }}/edit" class="badge bg-warning">
                        <i data-feather="edit"></i>
                    </a>
                    @csrf
                    @method('delete')
                    <button type="submit" class="badge bg-danger border-0" onclick="confirm('Hapus data?');"><i data-feather="x-circle"></i></button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection