<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Surat</title>
    <style>
        body { font-family: DejaVu Sans, sans-serif; line-height: 1.6; }
        h3 { text-align: center; }
    </style>
</head>
<body>
    <h3>{{ $surat->template->nama_template }}</h3>
    <p>Nomor: {{ $surat->nomor_surat }}</p>
    <p>{!! nl2br($isi) !!}</p>
    <br><br>
    <p style="text-align:right;">(...................................)</p>
</body>
</html>
