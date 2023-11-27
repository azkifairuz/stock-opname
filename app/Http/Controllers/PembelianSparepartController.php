<?php

namespace App\Http\Controllers;

use App\Models\PembelianSparepart;
use App\Models\Vendor;
use Illuminate\Http\Request;

class PembelianSparepartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataPembelian = PembelianSparepart::join('vendor', 'vendor.id_vendor', '=', 'pembelian_sparepart.id_vendor')->get();
        return view('pembeliansparepart.viewpembeliansparepart', compact('dataPembelian'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $vendor = Vendor::get();
        return view('pembeliansparepart.tambahpembeliansparepart',compact('vendor'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dataPembelian = new PembelianSparepart();

    
        // insert ke sql        
        $dataPembelian->no_invoice = $request->no_nota;
        $dataPembelian->tgl_pembelian = $request->tgl_pembelian;
        $dataPembelian->id_vendor = $request->id_vendor;

        $post = $dataPembelian->save();
        return redirect()->route('pembeliansparepart')
            ->with('success', 'devisi Berhasil Di Tambahakan');
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
        $dataPembelian = PembelianSparepart::join('vendor', 'vendor.id_vendor', '=', 'pembelian_sparepart.id_vendor')
        ->where('pembelian_sparepart.id_pembelian', '=', $id)->first();
        $vendor = Vendor::get();
        // dd($dataPembelian);
        return view('pembeliansparepart.editpembeliansparepart',compact('dataPembelian','vendor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $dataPembelian = PembelianSparepart::where('id_pembelian', '=', $id);
        $dataPembelian->update([
            'no_invoice' => $request->no_nota,
            'tgl_pembelian' => $request->tgl_pembelian,
            'id_vendor' => $request->id_vendor,
        ]);
        return redirect()->route('pembeliansparepart')
            ->with('success', 'mesin Berhasil Di hapus');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
