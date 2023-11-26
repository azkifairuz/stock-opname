<?php

namespace App\Http\Controllers;

use App\Models\Mesin;
use App\Models\Pegawai;
use App\Models\Peminjaman;
use App\Models\Sparepart;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{

    public function index()
    {

        $peminjaman = Peminjaman::count() > 0
            ? Peminjaman::first()->paginate(5) :
            collect();
        return view('peminjaman.viewpeminjaman', compact('peminjaman'))
            ->with('i', (request()->input('page', 1) - 1) * 5);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $spareparts = Sparepart::get();
        $pegawais = Pegawai::get();
        $mesins = Mesin::get();
        $dateNow = Carbon::now('DD-MM-YYYY');
        return view('peminjaman.tambahpeminjaman',compact('mesins','spareparts','pegawais','dateNow'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'nm_devisi' => 'required',
            'ket_devisi' => 'required',
        ]);

        $dataDevisi = new Peminjaman();
        $dataDevisi->nm_devisi = $request->nm_devisi;
        $dataDevisi->ket_devisi = $request->ket_devisi;

        $dataDevisi->save();
        return redirect()->route('peminjaman');
        // return redirect()->route('devisi.index')
        //     ->with('success', 'Jenis Tagihan Berhasil Ditambah');
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
        $devisi = Peminjaman::where('id_peminjaman', $id)->first();
        return view('devisi.editdevisi', compact('devisi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {


        $dataDevisi = Devisi::where('id_devisi', '=', $id);
        $dataDevisi->update([
            'nm_devisi' => $request->nm_devisi,
            'ket_devisi' => $request->ket_devisi
        ]);
        return redirect()->route('devisi');
        // ->with('success', 'Jenis tagihan berhasil terupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dataDevisi = Devisi::where('id_devisi', '=', $id);

        $dataDevisi->delete();
        return redirect()->route('devisi');
        // ->with('success', 'Jenis Tagihan Berhasil Di hapus');
    }
}
