<?php

namespace App\Http\Controllers;

use App\Models\Spp;
use App\Models\Kelas;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $siswa = Siswa::all();
        return view('Siswa.index', compact('siswa'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $siswa = siswa::with('kelas','spp')->paginate();
        $siswa = Siswa::all();
        $kelas = Kelas::all();
        $spp = spp::all();
        return view('Siswa.create', compact('siswa', 'kelas', 'spp'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        siswa::create($request->all());
        return redirect()->route('siswa.index')->with('success','Data siswa Berhasil Di Tambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show($id_siswa)
    {
        $siswa = Siswa::find($id_siswa);
        return view('Siswa.show', compact('siswa'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id_siswa)
    {
        $spp = spp::all();
        $kelas = kelas::all();
        $siswa = Siswa::findorfail($id_siswa);
        return view('Siswa.edit', compact('siswa', 'kelas', 'spp'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id_siswa)
    {
        $siswa = siswa::findorfail($id_siswa);
        $siswa->update([
            'nisn' => $request->nisn,
            'nis' => $request->nis,
            'nama' => $request->nama,
            'id_kelas' => $request->id_kelas,
            'alamat' => $request->alamat,
            'no_telp' => $request->no_telp,
            'id_spp' => $request->id_spp,
        ]);
        return redirect()->route('siswa.index')->with('success','Data Pemesanan Berhasil Di Edit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id_siswa)
    {
        $id_siswa = Siswa::find($id_siswa);
        $id_siswa->delete();
        return redirect()->route('siswa.index')->with('success', 'Data deleted successfully');
    }
}