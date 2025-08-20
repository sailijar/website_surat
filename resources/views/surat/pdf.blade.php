<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Surat</title>
    <style>
        body { font-family: DejaVu Sans, sans-serif; line-height: 1.6; }
        .header { text-align: center; font-weight: bold; margin-bottom: 20px; }
    </style>
</head>
<body>
    <div class="header">
        <h2>{{ $surat->template->nama }}</h2>
        <p>Nomor: {{ $surat->nomor }}</p>
    </div>

    <div>
        {!! nl2br($isi) !!}
    </div>
</body>
</html>
