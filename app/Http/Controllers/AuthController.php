<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
        if(session()->has('key')){
            return redirect()->route('siswa.index');
        }
        return view('login');
    }

    public function login(Request $request)
    {
        $key = Admin::where('username', $request->username)
                    ->where('password', $request->password)
                    ->get();

        if (!$key->isEmpty()) {
            session()->put('key', $key);
            return redirect('/home')->with('success', 'Anda Berhasil login');
        }
        return redirect('/login')->with('error', 'Anda tidak memiliki akun');
    }

    public function logout()
    {
        session()->flush();
        return redirect('/');
    }
}
