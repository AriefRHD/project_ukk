<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;

class AksesSiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view ('siswa');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
    }
    /**
     * Display the specified resource.
     */
    public function show($id_kelas)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id_kelas)
    {
       
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id_kelas)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id_kelas)
    {
        
    }
}