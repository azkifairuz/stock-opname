<?php

namespace App\Http\Controllers;

use App\Models\Rak;
use App\Models\Sparepart;
use App\Models\Vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SparepartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataSparepart = Sparepart::join('rak','rak.id_rak','=','sparepart.id_rak')
        ->join('vendor','vendor.id_vendor','=','sparepart.id_vendor')
        ->get();
        // $jnsTagihan = JnsTagihan::first()->paginate(5);
        return view('sparepart.viewsparepart', compact('dataSparepart'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $rak = Rak::get();
        $vendor = Vendor::get();
        return view('sparepart.tambahsparepart',compact('rak','vendor'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dataSparepart = new Sparepart();

        $image = $request->file('image');
        $image->storeAs('public/sparepart', $image->hashName());

        // insert ke sql        
        $dataSparepart->kd_sparepart = $request->kd_sparepart;
        $dataSparepart->part_number = $request->part_number;
        $dataSparepart->nm_sparepart = $request->nm_sparepart;
        $dataSparepart->ket_sparepart = $request->ket_sparepart;
        $dataSparepart->id_rak = $request->id_rak;
        $dataSparepart->image = $image->hashName();
        $dataSparepart->specifikasi = $request->specifikasi;
        $dataSparepart->id_vendor = $request->id_vendor;
        
        $post = $dataSparepart->save();
        return redirect()->route('sparepart');
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
        $rak = Rak::get();
        $vendor = Vendor::get();
        $dataSparepart = Sparepart::join('rak','rak.id_rak','=','sparepart.id_rak')
        ->join('vendor','vendor.id_vendor','=','sparepart.id_vendor')
        ->where('id_sparepart','=',$id)->first();
        return view('sparepart.editsparepart', compact('dataSparepart','rak','vendor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $dataSparepart = Sparepart::where('id_sparepart','=',$id);
        $dataSparepart1 = Sparepart::where('id_sparepart','=',$id)->first();
        if ($request->hasFile('image')) {

            //upload image
            $image = $request->file('image');
            $image->storeAs('public/sparepart', $image->hashName());

            //delete old image
            Storage::delete('public/sparepart/'. $dataSparepart1->image);

            //update post with new image         
            $dataSparepart->update([
                'kd_sparepart' => $request->kd_sparepart,
                'part_number' => $request->part_number,
                'nm_sparepart' => $request->nm_sparepart,
                'ket_sparepart' => $request->ket_sparepart,
                'id_rak' => $request->id_rak,
                'image' => $image->hashName(),
                'specifikasi' => $request->specifikasi,
                'id_vendor' => $request->id_vendor,
            ]);

        }else{
         
            //update post without image
            $dataSparepart->update([
                'kd_sparepart' => $request->kd_sparepart,
                'part_number' => $request->part_number,
                'nm_sparepart' => $request->nm_sparepart,
                'ket_sparepart' => $request->ket_sparepart,
                'id_rak' => $request->id_rak,
                'specifikasi' => $request->specifikasi,
                'id_vendor' => $request->id_vendor,
            ]);
      
        }
        return redirect()->route('sparepart');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dataSparepart = Sparepart::where('id_sparepart','=',$id);
        $dataSparepart1 = Sparepart::where('id_sparepart','=',$id)->first();

        //delete old image
        Storage::delete('public/sparepart/'. $dataSparepart1->image);
        
        $dataSparepart->delete();
        return redirect()->route('sparepart');
    }
}
