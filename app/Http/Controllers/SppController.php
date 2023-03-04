<?php

namespace App\Http\Controllers;

use App\Models\Spp;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\SppController;

class SppController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Spp = spp::all();
        return view('spp.index', compact('Spp'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $Spp = spp::all();
        return view('spp.create', compact('Spp'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        spp::create($request->all());
        return redirect()->route('spp.index')->with('success','Data spp Berhasil Di Tambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $Spp = spp::find($id);
        return view('spp.show', compact('Spp'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $Spp = spp::find($id);
        return view('spp.edit', compact('Spp'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $Spp = spp::findorfail($id);
        $Spp->update([
            'tahun' => $request->tahun,
            'nominal' => $request->nominal,
        ]);
        return redirect()->route('spp.index')->with('success','Data Pemesanan Berhasil Di Edit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $Spp = spp::find($id);
        $Spp->delete();
        return redirect()->route('spp.index')->with('success', 'Data deleted successfully');
    }
}