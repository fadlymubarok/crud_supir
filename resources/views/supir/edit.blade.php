@extends('layouts.master')

@section('header')
<header class="d-flex align-items-center pb-3 mb-4 border-bottom">
    <span class="fs-3">Edit Data {{ $supir->nama }}</span>
</header>
@endsection

@section('main')
<form action="/supir/{{ $supir->id }}" method="post">
    @csrf
    @method('put')
    <div class="row">
        <div class="col-lg-8">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ $supir->nama }}" required>
                @error('nama')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="no_telp" class="form-label">No Telepon</label>
                <input type="tel" class="form-control @error('no_telp') is-invalid @enderror" name="no_telp" value="{{ $supir->no_telp }}" maxlength="12" required>
                @error('no_telp')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="no_sim" class="form-label">No SIM</label>
                <input type="tel" class="form-control @error('no_sim') is-invalid @enderror" name="no_sim" value="{{ $supir->no_telp }}" maxlength="12" required>
                @error('no_sim')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="masa_berlaku" class="form-label">Masa Berlaku SIM</label>
                <input type="date" class="form-control" name="masa_berlaku" value="{{ $supir->masa_berlaku }}">
                @error('masa_berlaku')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="status" class="form-label">Status Supir</label>
                <select class="form-select" name="status">
                    <option value="Aktif" {{ $supir->status == "Aktif" ? 'selected' : ''}}>Aktif</option>
                    <option value="Tidak Aktif" {{ $supir->status == "Tidak Aktif" ? 'selected' : ''}}>Tidak Aktif</option>
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