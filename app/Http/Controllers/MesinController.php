<?php

namespace App\Http\Controllers;

use App\Models\Mesin;
use Illuminate\Http\Request;

class MesinController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataMesin = Mesin::get();
        // $jnsTagihan = JnsTagihan::first()->paginate(5);
        return view('mesin.viewmesin', compact('dataMesin'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mesin.tambahmesin');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dataMesin = new Mesin();
        // insert ke sql        
        $dataMesin->nm_mesin = $request->nm_mesin;
        $dataMesin->specifikasi = $request->specifikasi;
        $dataMesin->ket_mesin = $request->ket_mesin;

        $post = $dataMesin->save();
        return redirect()->route('mesin')
            ->with('success', 'mesin Berhasil Di hapus');
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
        $dataMesin = Mesin::where('id_mesin', $id)->first();
        return view('mesin.editmesin', compact('dataMesin'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $dataMesin = Mesin::where('id_mesin', '=', $id);
        $dataMesin->update([
            'nm_mesin' => $request->nm_mesin,
            'specifikasi' => $request->specifikasi,
            'ket_mesin' => $request->ket_mesin,
        ]);
        return redirect()->route('mesin')
            ->with('success', 'mesin Berhasil Di Update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dataMesin = Mesin::where('id_mesin', '=', $id);

        $dataMesin->delete();
        return redirect()->route('mesin')
            ->with('success', 'mesin Berhasil Di hapus');
    }
}
