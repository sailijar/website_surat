@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Buat Surat Baru</h2>

    <form action="{{ route('surat.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Nomor Surat</label>
            <input type="text" name="nomor_surat" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Penduduk</label>
            <select name="penduduk_id" class="form-control" required>
                <option value="">-- Pilih Penduduk --</option>
                @foreach($penduduk as $p)
                    <option value="{{ $p->id }}">{{ $p->nama }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label>Jenis Surat</label>
            <select name="template_surat_id" class="form-control" required>
                <option value="">-- Pilih Template Surat --</option>
                @foreach($template as $t)
                    <option value="{{ $t->id }}">{{ $t->nama_template }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Buat Surat</button>
    </form>
</div>
@endsection
