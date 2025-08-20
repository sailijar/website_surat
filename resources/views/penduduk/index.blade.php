@extends('layouts.app')

@section('content')
<div class="flex items-center justify-between mb-4">
  <h1 class="text-xl font-semibold">Data Penduduk</h1>
  <a href="{{ route('penduduk.create') }}" class="px-3 py-2 bg-blue-600 text-white rounded">Tambah</a>
</div>

<div class="bg-white rounded shadow overflow-x-auto">
  <table class="min-w-full text-sm">
    <thead class="bg-slate-100">
      <tr>
        <th class="text-left p-2">NIK</th>
        <th class="text-left p-2">Nama</th>
        <th class="text-left p-2">Alamat</th>
        <th class="text-left p-2">Aksi</th>
      </tr>
    </thead>
    <tbody>
      @forelse($data as $p)
        <tr class="border-t">
          <td class="p-2">{{ $p->nik }}</td>
          <td class="p-2">{{ $p->nama }}</td>
          <td class="p-2">{{ $p->alamat }} RT {{ $p->rt }}/RW {{ $p->rw }} Dusun {{ $p->dusun }}</td>
          <td class="p-2">
            <form method="POST" action="{{ route('penduduk.destroy', $p) }}">
              @csrf @method('DELETE')
              <button class="px-2 py-1 text-red-700">Hapus</button>
            </form>
          </td>
        </tr>
      @empty
        <tr><td class="p-2" colspan="4">Belum ada data.</td></tr>
      @endforelse
    </tbody>
  </table>
</div>

<div class="mt-3">
  {{ $data->links() }}
</div>
@endsection
