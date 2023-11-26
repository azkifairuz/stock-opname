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
            ? Peminjaman::join('pegawai', 'peminjaman.id_pegawai', '=', 'pegawai.id_pegawai')
                ->join('mesin', 'peminjaman.id_mesin', '=', 'mesin.id_mesin')
                ->join('sparepart', 'peminjaman.id_sparepart', '=', 'sparepart.id_sparepart')
                ->select(
                    'peminjaman.id_peminjaman',
                    'pegawai.id_pegawai',
                    'mesin.id_mesin',
                    'sparepart.id_sparepart',
                    'pegawai.nm_pegawai as peminjam',
                    'mesin.nm_mesin',
                    'peminjaman.tgl_peminjaman',
                    'peminjaman.qty',
                    'peminjaman.status',
                    'sparepart.nm_sparepart'
                )
                ->paginate(5) :
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
        $dateNow = Carbon::now();
        return view('peminjaman.tambahpeminjaman', compact('mesins', 'spareparts', 'pegawais', 'dateNow'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'sparepart' => 'required',
            'peminjam' => 'required',
            'mesin' => 'required',
        ]);

        $dataPeminjaman = new Peminjaman();
        $dataPeminjaman->id_pegawai = $request->peminjam;
        $dataPeminjaman->id_mesin = $request->mesin;
        $dataPeminjaman->id_sparepart = $request->sparepart;
        $dataPeminjaman->qty = $request->qty;
        $dataPeminjaman->tgl_peminjaman = Carbon::now();;
        $dataPeminjaman->status = 'belum dikembalikan';

        $dataPeminjaman->save();
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
