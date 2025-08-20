<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penduduk;
use App\Models\Surat;
use App\Models\Templatesurat;

class HomeController extends Controller
{
    public function index()
    {
        $jumlahPenduduk = Penduduk::count();
        $jumlahSurat = Surat::count();
        $jumlahTemplate = Templatesurat::count();
        $suratTerbaru = Surat::with(['penduduk', 'template'])->latest()->take(5)->get();

        return view('home', compact('jumlahPenduduk', 'jumlahSurat', 'jumlahTemplate', 'suratTerbaru'));
    }
}
