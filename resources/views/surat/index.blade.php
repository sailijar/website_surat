@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Daftar Surat</h2>
    <a href="{{ route('surat.create') }}" class="btn btn-success mb-3">+ Buat Surat</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nomor Surat</th>
                <th>Penduduk</th>
                <th>Jenis Surat</th>
                <th>Tanggal</th>
            </tr>
        </thead>
        <tbody>
            @foreach($surats as $s)
            <tr>
                <td>{{ $s->nomor_surat }}</td>
                <td>{{ $s->penduduk->nama }}</td>
                <td>{{ $s->template->nama_template }}</td>
                <td>{{ $s->tanggal_surat }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
