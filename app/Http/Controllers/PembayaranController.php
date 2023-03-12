<?php

namespace App\Http\Controllers;

use App\Models\Spp;
use App\Models\Siswa;
use App\Models\Petugas;
use App\Models\Pembayaran;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use PDF;

class PembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::user()->level != 'admin' && Auth::user()->level != 'petugas') {
            return redirect()->back();
        }
        
        $pembayaran = Pembayaran::all();
        return view('Pembayaran.index', compact('pembayaran'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pembayaran = Pembayaran::all();
        $siswa = Siswa::all();
        $spp = spp::all();
        $petugas = petugas::all();
        return view('Pembayaran.create', compact('siswa', 'pembayaran', 'spp', 'petugas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        pembayaran::create($request->all());
        return redirect()->route('pembayaran.index')->with('success','Data Pembayaran Berhasil Di Tambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show($id_pembayaran)
    {
        $pembayaran = Pembayaran::find($id_pembayaran);
        return view('Pembayaran.show', compact('pembayaran'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id_pembayaran)
    {
        $siswa = Siswa::all();
        $spp = spp::all();
        $petugas = petugas::all();
        $pembayaran = Pembayaran::findorfail($id_pembayaran);
        return view('Pembayaran.edit', compact('siswa', 'petugas', 'spp', 'pembayaran'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id_pembayaran)
    {
        $pembayaran = Pembayaran::findorfail($id_pembayaran);
        $pembayaran->update([
            'id_petugas' => $request->id_petugas,
            'nisn' => $request->nisn,
            'tgl_bayar' => $request->tgl_bayar,
            'bulan_dibayar' => $request->bulan_dibayar,
            'tahun_dibayar' => $request->tahun_dibayar,
            'id_spp' => $request->id_spp,
            'jumlah_bayar' => $request->jumlah_bayar,
        ]);
        return redirect()->route('pembayaran.index')->with('success','Data Pembayaran Berhasil Di Edit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id_pembayaran)
    {
        $pembayaran = Pembayaran::find($id_pembayaran);
        $pembayaran->delete();
        return redirect()->route('pembayaran.index')->with('success', 'Data deleted successfully');
    }

    public function exportpdf()
    {
        $pembayaran = Pembayaran::all();

        view()->share('pembayaran', $pembayaran);
        $pdf = PDF::loadview('pdf.export');
        return $pdf->download('data-pembayaran.pdf');
    }
}