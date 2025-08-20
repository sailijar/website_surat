@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Preview Surat</h3>
    <p><strong>Nomor Surat:</strong> {{ $surat->nomor_surat }}</p>
    <p>{!! nl2br($isi) !!}</p>

    <a href="{{ route('surat.pdf', $surat->id) }}" class="btn btn-danger">Download PDF</a>
</div>
@endsection
