<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\KelasController;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Kelas = Kelas::all();
        return view('Kelas.index', compact('Kelas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $Kelas = kelas::all();
        return view('Kelas.create', compact('Kelas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $Kelas = kelas::create($request->all());
        return redirect()->route('kelas.index')->with('success','Data kelas Berhasil Di Tambahkan');
    }
    /**
     * Display the specified resource.
     */
    public function show($id_kelas)
    {
        $Kelas = Kelas::find($id_kelas);
        return view('Kelas.show', compact('Kelas'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id_kelas)
    {
        $Kelas = Kelas::find($id_kelas);
        return view('Kelas.edit', compact('Kelas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id_kelas)
    {
        $Kelas = Kelas::findorfail($id_kelas);
        $Kelas->update([
            'nama_kelas' => $request->nama_kelas,
            'kompetensi_keahlian' => $request->kompetensi_keahlian,
        ]);
        return redirect()->route('kelas.index')->with('success','Data Pemesanan Berhasil Di Edit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id_kelas)
    {
        $Kelas = Kelas::find($id_kelas);
        $Kelas->delete();
        return redirect()->route('kelas.index')->with('success', 'Data deleted successfully');
    }
}