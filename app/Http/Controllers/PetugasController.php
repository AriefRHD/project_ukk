<?php

namespace App\Http\Controllers;

use App\Models\petugas;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PetugasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Petugas = petugas::all();
        return view('Petugas.index', compact('Petugas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $Petugas = petugas::all();
        return view('Petugas.create', compact('Petugas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $Petugas = petugas::create($request->all());
        return redirect()->route('petugas.index')->with('success','Data Petugas Berhasil Di Tambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show($id_petugas)
    {
        $Petugas = petugas::find($id_petugas);
        return view('petugas.show', compact('Petugas'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id_petugas)
    {
        $Petugas = petugas::find($id_petugas);
        return view('Petugas.edit', compact('Petugas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id_petugas)
    {
        $Petugas = petugas::findorfail($id_petugas);
        $Petugas->update([
            'username' => $request->username,
            'password' => $request->password,
            'nama_petugas' => $request->nama_petugas,
            'level' => $request->level,
        ]);


        return redirect()->route('petugas.index')->with('success','Data Pemesanan Berhasil Di Edit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id_petugas)
    {
        $Petugas = petugas::find($id_petugas);
        $Petugas->delete();
        return redirect()->route('petugas.index')->with('success', 'Data deleted successfully');
    }
}