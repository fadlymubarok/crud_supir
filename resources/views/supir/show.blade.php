@extends('layouts.master')
@section('header')
<header class="d-flex align-items-center pb-3 mb-4 border-bottom">
    <span class="fs-3">Data {{ $supir->nama }}</span>
</header>
@endsection
@section('main')
<span>Nama : {{ $supir->nama }}</span> <br />
<span>Nomor telepon : {{ $supir->no_telp }}</span> <br />
<span>nomor SIM : {{ $supir->no_sim }}</span> <br />
<span>Masa berlaku SIM : {{ $supir->masa_berlaku }}</span> <br />
<span>Status Supir : {{ $supir->status }}</span>
@endsection