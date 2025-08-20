@extends('layouts.app')

@section('content')
<div class="flex items-center justify-between mb-4">
  <h1 class="text-xl font-semibold">Riwayat Surat</h1>
  <a href="{{ route('surat.create') }}" class="px-3 py-2 bg-blue-600 text-white rounded">Buat Surat</a>
</div>

<div class="bg-white rounded shadow overflow-x-auto">
  <table class="min-w-full text-sm">
    <thead class="bg-slate-100">
      <tr>
        <th class="text-left p-2">Tanggal</th>
        <th class="text-left p-2">Nomor</th>
        <th class="text-left p-2">Jenis</th>
        <th class="text-left p-2">Penduduk</th>
        <th class="text-left p-2">Aksi</th>
      </tr>
    </thead>
    <tbody>
      @forelse($surat as $s)
        <tr class="border-t">
          <td class="p-2">{{ $s->tanggal_surat?->format('d/m/Y') }}</td>
          <td class="p-2">{{ $s->nomor }}</td>
          <td class="p-2">{{ $s->template->nama }}</td>
          <td class="p-2">{{ $s->penduduk->nama }}</td>
          <td class="p-2">
            <a class="text-blue-600" href="{{ route('surat.pdf',$s) }}">Unduh PDF</a>
          </td>
        </tr>
      @empty
        <tr><td class="p-2" colspan="5">Belum ada surat.</td></tr>
      @endforelse
    </tbody>
  </table>
</div>

<div class="mt-3">
  {{ $surat->links() }}
</div>
@endsection
