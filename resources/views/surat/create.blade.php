@extends('layouts.app')

@section('content')
<h1 class="text-xl font-bold mb-4">Buat Surat</h1>

<form method="POST" action="{{ route('surat.store') }}" class="space-y-4">
    @csrf

    <div>
        <label class="block">Penduduk</label>
        <select name="penduduk_id" class="w-full border rounded p-2">
            <option value="">-- Pilih Penduduk --</option>
            @foreach($penduduk as $p)
                <option value="{{ $p->id }}">{{ $p->nama }} - {{ $p->nik }}</option>
            @endforeach
        </select>
    </div>

    <div>
        <label class="block">Jenis Surat</label>
        <select name="template_surat_id" class="w-full border rounded p-2">
            <option value="">-- Pilih Template Surat --</option>
            @foreach($templates as $t)
                <option value="{{ $t->id }}">{{ $t->nama }}</option>
            @endforeach
        </select>
    </div>

    <div>
        <label class="block">Nomor Surat</label>
        <input name="nomor" class="w-full border rounded p-2" placeholder="140/001/DS/{{ date('Y') }}">
    </div>

    <div>
        <label class="block">Tanggal Surat</label>
        <input type="date" name="tanggal_surat" value="{{ date('Y-m-d') }}" class="w-full border rounded p-2">
    </div>

    <button class="px-4 py-2 bg-blue-600 text-white rounded">Generate PDF</button>
</form>
@endsection
