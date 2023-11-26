<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('login');
    }

    public function cekLogin(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');
        $request->validate(
            [
                'username'=> 'required',
                'password'=> 'required',
            ]
        );
        $login = User::where('username',$username)->first();
        if($login){
            if($password == $login->password){
                Session::put('statuslogin',true);
                Session::put('id_pegawai',$login->id_pegawai);
                return redirect()->route('dasboard');
            }else{
                return redirect()->route('login')->with('error','password yang anda masukkan salah');
            }
        }else{
            return redirect()->route('login')->with('error','username yang anda masukkan salah');
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
