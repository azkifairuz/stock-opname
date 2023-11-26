<?php

namespace App\Http\Controllers;

use App\Models\Devisi;
use Illuminate\Http\Request;

class DevisiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $devisi = Devisi::get();
        // $jnsTagihan = JnsTagihan::first()->paginate(5);
        return view('devisi.viewdevisi', compact('devisi'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
            
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('devisi.tambahdevisi');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // $request->validate([
        //     'nm_devisi' => 'required',
        //     'ket_devisi' => 'required',
        // ]);

        $dataDevisi = new Devisi();
        // insert ke sql        
        $dataDevisi->nm_devisi = $request->nm_devisi;
        $dataDevisi->ket_devisi = $request->ket_devisi;
        
        $post = $dataDevisi->save();
        return redirect()->route('devisi');
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

    // public function show(JnsTagihan $jnsTagihan): View
    // {
    //     return view('jenis-tagihan.show', compact('jnsTagihan'));

    // }
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $devisi = Devisi::where('id_devisi',$id)->first();
        return view('devisi.editdevisi', compact('devisi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
       
        
        $dataDevisi = Devisi::where('id_devisi','=',$id);
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
        $dataDevisi = Devisi::where('id_devisi','=',$id);

        $dataDevisi->delete();
        return redirect()->route('devisi');
            // ->with('success', 'Jenis Tagihan Berhasil Di hapus');
    }
}
