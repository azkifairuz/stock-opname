<?php

namespace App\Http\Controllers;

use App\Models\Rak;
use Illuminate\Http\Request;

class RakController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rak = Rak::get();
        // $jnsTagihan = JnsTagihan::first()->paginate(5);
        return view('rak.viewrak', compact('rak'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('rak.tambahrak');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dataRak = new Rak();
        // insert ke sql        
        $dataRak->kd_rak = $request->kd_rak;
        $dataRak->nm_rak = $request->nm_rak;
        $dataRak->ket_rak = $request->ket_rak;

        $post = $dataRak->save();
        return redirect()->route('rak')
            ->with('success', 'devisi Berhasil Di hapus');
        ;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $dataRak = Rak::where('id_rak', $id)->first();
        return view('rak.editrak', compact('dataRak'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $dataRak = Rak::where('id_rak', '=', $id);
        $dataRak->update([
            'kd_rak' => $request->kd_rak,
            'nm_rak' => $request->nm_rak,
            'ket_rak' => $request->ket_rak
        ]);
        return redirect()->route('rak')
            ->with('success', 'devisi Berhasil Di hapus');
        ;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dataRak = Rak::where('id_rak', '=', $id);

        $dataRak->delete();
        return redirect()->route('rak')
            ->with('success', 'devisi Berhasil Di hapus');
        ;
    }
}
