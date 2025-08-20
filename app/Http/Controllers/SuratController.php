<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penduduk;
use App\Models\Surat;
use App\Models\Templatesurat;

class SuratController extends Controller
{
    // Tampilkan daftar surat
    public function index()
    {
        $surats = Surat::with(['penduduk', 'template'])->get();
        return view('surat.index', compact('surats'));
    }

    // Form buat surat
    public function create()
    {
        $penduduk = Penduduk::all();
        $template = Templatesurat::all();
        return view('surat.create', compact('penduduk','template'));
    }

    // Simpan surat baru
    public function store(Request $request)
    {
        $request->validate([
            'nomor_surat' => 'required',
            'penduduk_id' => 'required',
            'template_surat_id' => 'required',
        ]);

        // misalnya nanti ada form tambahan untuk field dinamis
        $data_json = json_encode($request->except(['nomor_surat','penduduk_id','template_surat_id','_token']));

        Surat::create([
            'nomor_surat' => $request->nomor_surat,
            'penduduk_id' => $request->penduduk_id,
            'template_surat_id' => $request->template_surat_id,
            'tanggal_surat' => now(),
            'data_json' => $data_json,
        ]);

        return redirect()->route('surat.index')->with('success','Surat berhasil dibuat');
    }

    // Preview isi surat
    public function show($id)
    {
        $surat = Surat::with(['penduduk', 'template'])->findOrFail($id);

        $isi = $surat->template->isi_template;

        $data = json_decode($surat->data_json, true);
        foreach ($data as $key => $value) {
            $isi = str_replace("{" . $key . "}", $value, $isi);
        }

        return view('surat.show', compact('surat', 'isi'));
    }

    // Export ke PDF
    public function exportPdf($id)
    {
        $surat = Surat::with(['penduduk', 'template'])->findOrFail($id);

        $isi = $surat->template->isi_template;
        $data = json_decode($surat->data_json, true);
        foreach ($data as $key => $value) {
            $isi = str_replace("{" . $key . "}", $value, $isi);
        }

        $pdf = PDF::loadView('surat.pdf', compact('surat', 'isi'));
        return $pdf->download('surat_' . $surat->nomor_surat . '.pdf');
    }

}
