@extends('layouts.app')

@section('content')
<h1 class="text-xl font-semibold mb-4">Tambah Penduduk</h1>

<form method="POST" action="{{ route('penduduk.store') }}" class="bg-white rounded shadow p-4 grid grid-cols-1 md:grid-cols-2 gap-3">
  @csrf
  <div>
    <label class="block text-sm">NIK</label>
    <input name="nik" class="w-full border rounded p-2" required>
  </div>
  <div>
    <label class="block text-sm">Nama</label>
    <input name="nama" class="w-full border rounded p-2" required>
  </div>
  <div class="md:col-span-2">
    <label class="block text-sm">Alamat</label>
    <input name="alamat" class="w-full border rounded p-2">
  </div>
  <div>
    <label class="block text-sm">RT</label>
    <input name="rt" class="w-full border rounded p-2">
  </div>
  <div>
    <label class="block text-sm">RW</label>
    <input name="rw" class="w-full border rounded p-2">
  </div>
  <div>
    <label class="block text-sm">Dusun</label>
    <input name="dusun" class="w-full border rounded p-2">
  </div>
  <div>
    <label class="block text-sm">Agama</label>
    <input name="agama" class="w-full border rounded p-2">
  </div>
  <div>
    <label class="block text-sm">Pekerjaan</label>
    <input name="pekerjaan" class="w-full border rounded p-2">
  </div>
  <div>
    <label class="block text-sm">Jenis Kelamin</label>
    <input name="jenis_kelamin" class="w-full border rounded p-2" placeholder="L/P">
  </div>
  <div>
    <label class="block text-sm">Tempat Lahir</label>
    <input name="tempat_lahir" class="w-full border rounded p-2">
  </div>
  <div>
    <label class="block text-sm">Tanggal Lahir</label>
    <input type="date" name="tanggal_lahir" class="w-full border rounded p-2">
  </div>
  <div class="md:col-span-2">
    <button class="px-4 py-2 bg-blue-600 text-white rounded">Simpan</button>
  </div>
</form>
@endsection
