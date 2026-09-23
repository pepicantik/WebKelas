<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function welcome()
    {
        $siswa = Siswa::all();
        return view('welcome', compact('siswa'));
    }

    public function index()
    {
        $siswa = Siswa::paginate(2);
        return view('siswa.index', compact('siswa'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('siswa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $image = $request->file('image')->store('images', 'public');
        $input = $request->all();
        $input['image'] = "$image";

        return redirect()->route('siswa.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Siswa $siswa)
    {
        $siswa = Siswa::find($siswa);
        return view('detail', compact('siswa'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Siswa $siswa)
    {
        $siswa = Siswa::all($siswa);
        return view('siswa.edit', compact('siswa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Siswa $siswa)
    {
        $siswa = $request->update();
        if (session()->hasFile('image')) {
            $image = $request->file('image')->store('images', 'public');
            $siswa->image = $image;
        }
        $siswa->nama_lengkap = $request->nama_lengkap;
        $siswa->tgl_lahir = $request->tgl_lahir;
        $siswa->tempat_lahir = $request->tempat_lahir;
        $siswa->hobi = $request->hobi;
        $siswa->sosmed = $request->sosmed;
        $siswa->save();

        return redirect()->route('siswa.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Siswa $siswa)
    {
        $siswa = Siswa::find($siswa)->delete();
        return redirect()->route('siswa.index');
    }
}
