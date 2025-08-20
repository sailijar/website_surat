<?php

namespace App\Http\Controllers;

use App\Models\Surat;
use App\Models\Penduduk;
use App\Models\TemplateSurat;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class SuratController extends Controller
{
    public function index()
    {
        $surat = Surat::with(['penduduk','template'])->latest()->paginate(10);
        return view('surat.index', compact('surat'));
    }

    public function create()
    {
        $penduduk = Penduduk::all();
        $templates = TemplateSurat::all();
        return view('surat.create', compact('penduduk','templates'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'penduduk_id' => 'required|exists:penduduks,id',
            'template_surat_id' => 'required|exists:template_surats,id',
            'nomor' => 'required|string',
            'tanggal_surat' => 'required|date',
        ]);

        $surat = Surat::create([
            'penduduk_id' => $request->penduduk_id,
            'template_surat_id' => $request->template_surat_id,
            'nomor' => $request->nomor,
            'tanggal_surat' => $request->tanggal_surat,
            'fields' => $request->fields ?? [],
        ]);

        return redirect()->route('surat.show', $surat->id);
    }

    public function show($id)
    {
        $surat = Surat::with(['penduduk','template'])->findOrFail($id);

        // Ganti placeholder di template
        $isi = $surat->template->isi;
        $isi = str_replace('{{nama}}', $surat->penduduk->nama, $isi);
        $isi = str_replace('{{nik}}', $surat->penduduk->nik, $isi);
        $isi = str_replace('{{alamat}}', $surat->penduduk->alamat, $isi);
        $isi = str_replace('{{nomor}}', $surat->nomor, $isi);
        $isi = str_replace('{{tanggal}}', date('d-m-Y', strtotime($surat->tanggal_surat)), $isi);

        // kalau ada fields dinamis
        foreach ($surat->fields ?? [] as $key => $value) {
            $isi = str_replace('{{'.$key.'}}', $value, $isi);
        }

        // Buat PDF
        $pdf = Pdf::loadView('surat.pdf', compact('surat','isi'));
        return $pdf->download('surat-'.$surat->id.'.pdf');
    }
}
