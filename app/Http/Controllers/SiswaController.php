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
        $siswa = Siswa::orderBy('nama_lengkap', 'asc')->get();
        return view('welcome', compact('siswa'));
    }

    public function home()
    {
        $siswa = Siswa::all();
        return view('home', compact('siswa'));
    }

    public function index(Request $request)
    {
        if (!session()->has('key')) {
            return redirect()->route('login')->with('error', 'Silahkan login terlebih dahulu');
        }

        $keyword = $request->input('search');

        $siswa = Siswa::when($keyword, function ($query, $keyword) {
            $query->where('nama_lengkap', 'like', '%' . $keyword . '%');
        })->orderBy('id', 'desc')->paginate(5);

        return view('siswa.index', compact('siswa'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (!session()->has('key')) {
            return redirect()->route('login')->with('error', 'Silahkan login terlebih dahulu');
        }

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

        Siswa::create($input);
        return redirect()->route('siswa.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $siswa = Siswa::find($id);
        return view('detail', compact('siswa'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        if (!session()->has('key')) {
            return redirect()->route('login')->with('error', 'Silahkan login terlebih dahulu');
        }

        $siswa = Siswa::find($id);
        return view('siswa.edit', compact('siswa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $siswa = Siswa::find($id);
        if ($request->hasFile('image')) {
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
    public function destroy(String $id)
    {
        $siswa = Siswa::find($id);
        $siswa->delete();
        return redirect()->route('siswa.index');
    }
}
