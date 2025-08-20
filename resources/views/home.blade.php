@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Dashboard</h1>

    <div class="row">
        <div class="col-md-4">
            <div class="alert alert-primary">Jumlah Penduduk: {{ $jumlahPenduduk }}</div>
        </div>
        <div class="col-md-4">
            <div class="alert alert-success">Jumlah Surat: {{ $jumlahSurat }}</div>
        </div>
        <div class="col-md-4">
            <div class="alert alert-info">Jumlah Template Surat: {{ $jumlahTemplate }}</div>
        </div>
    </div>

    <h3 class="mt-4">Surat Terbaru</h3>
    <table class="table">
        <thead>
            <tr>
                <th>Nomor Surat</th>
                <th>Nama Penduduk</th>
                <th>Jenis Surat</th>
                <th>Tanggal</th>
            </tr>
        </thead>
        <tbody>
            @foreach($suratTerbaru as $s)
            <tr>
                <td>{{ $s->nomor_surat }}</td>
                <td>{{ $s->penduduk->nama }}</td>
                <td>{{ $s->template->nama_template }}</td>
                <td>{{ $s->created_at->format('d-m-Y') }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
