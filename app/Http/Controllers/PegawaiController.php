<?php

namespace App\Http\Controllers;

use App\Models\Devisi;
use App\Models\Pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataPegawai = Pegawai::join('devisi','devisi.id_devisi','=','pegawai.id_devisi')->get();
        // $dataPegawai = Pegawai::get();
        // $jnsTagihan = JnsTagihan::first()->paginate(5);
        return view('pegawai.viewpegawai', compact('dataPegawai'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $devisi = Devisi::get();
        return view('pegawai.tambahpegawai',compact('devisi'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dataPegawai = new Pegawai();
        // insert ke sql        
        $dataPegawai->nip = $request->nip;
        $dataPegawai->nm_pegawai = $request->nm_pegawai;
        $dataPegawai->id_devisi = $request->id_devisi;
        
        
        $post = $dataPegawai->save();
        return redirect()->route('pegawai');
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
        $devisi = Devisi::get();
        $dataPegawai = Pegawai::join('devisi','devisi.id_devisi','=','pegawai.id_pegawai')->where('id_pegawai',$id)->first();
        return view('pegawai.editpegawai', compact('dataPegawai','devisi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $dataPegawai = Pegawai::where('id_pegawai','=',$id);
        $dataPegawai->update([
            'nip' => $request->nip,
            'nm_pegawai' => $request->nm_pegawai,
            'id_devisi' => $request->id_devisi,
        ]);
        return redirect()->route('pegawai');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dataPegawai = Pegawai::where('id_pegawai','=',$id);

        $dataPegawai->delete();
        return redirect()->route('pegawai');
    }
}
