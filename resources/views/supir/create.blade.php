@extends('layouts.master')

@section('header')
<header class="d-flex align-items-center pb-3 mb-4 border-bottom">
    <span class="fs-3">Create New Data</span>
</header>
@endsection

@section('main')
<form action="/supir" method="post">
    @csrf
    <div class="row">
        <div class="col-lg-8">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama') }}" required autofocus>
                @error('nama')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="no_telp" class="form-label">No Telepon</label>
                <input type="tel" class="form-control @error('no_telp') is-invalid @enderror" name="no_telp" value="{{ old('no_telp') }}" maxlength="12" required>
                @error('no_telp')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="no_sim" class="form-label">No SIM</label>
                <input type="tel" class="form-control @error('no_sim') is-invalid @enderror" name="no_sim" value="{{ old('no_sim') }}" maxlength="12" required>
                @error('no_sim')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="masa_berlaku" class="form-label">Masa Berlaku SIM</label>
                <input type="date" class="form-control" name="masa_berlaku">
                @error('masa_berlaku')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="status" class="form-label">Status Supir</label>
                <select class="form-select" name="status">
                    <option value="Aktif">Aktif</option>
                    <option value="Tidak Aktif">Tidak Aktif</option>
                </select>
            </div>
            <div class="mb-3">
                <a href="/supir" class="btn btn-danger">Back</a>
                <button type="submit" class="btn btn-primary">Create</button>
            </div>
        </div>
    </div>
</form>
@endsection