<?php

namespace App\Http\Controllers;

use App\Models\Vendor;
use Illuminate\Http\Request;

class VendorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataVendor = Vendor::get();
        // $jnsTagihan = JnsTagihan::first()->paginate(5);
        return view('vendor.viewvendor', compact('dataVendor'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('vendor.tambahvendor');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dataVendor = new Vendor();
        // insert ke sql        
        $dataVendor->nm_vendor = $request->nm_vendor;
        $dataVendor->no_telp = $request->no_telp;
        $dataVendor->email = $request->email;
        $dataVendor->alamat = $request->alamat;
        
        $post = $dataVendor->save();
        return redirect()->route('vendor');
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
        $dataVendor = Vendor::where('id_vendor',$id)->first();
        return view('vendor.editvendor', compact('dataVendor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $dataVendor = Vendor::where('id_vendor','=',$id);
        $dataVendor->update([
            'nm_vendor' => $request->nm_vendor,
            'no_telp' => $request->no_telp,
            'email' => $request->email,
            'alamat' => $request->alamat,
        ]);
        return redirect()->route('vendor');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dataVendor = Vendor::where('id_vendor','=',$id);

        $dataVendor->delete();
        return redirect()->route('vendor');
    }
}
