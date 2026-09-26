<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Moment;

class MomentController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index(Request $request)
    {
        if(!session()->has('key')){
            return redirect()->route('login');
        }

        $keyword = $request->input('search');

    $moment = Moment::when($keyword, function ($query, $keyword) {
        $query->where('judul', 'like', '%' . $keyword . '%');
    })->paginate(5);

    return view('moment.index', compact('moment'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if(!session()->has('key')){
            return redirect()->route('login');
        }
        return view('moment.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $image = $request->file('image')->store('images', 'public');
        $input = $request->all();
        $input['image'] = "$image";

        Moment::create($input);
        return redirect()->route('moment.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $moment = Moment::find($id);
        return view('moment.detail', compact('moment'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        if(!session()->has('key')){
            return redirect()->route('login');
        }
        $moment = Moment::find($id);
        return view('moment.edit', compact('moment'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $moment = Moment::find($id);
        if($request->hasFile('image')) {
            $image = $request->file('image')->store('images', 'public');
            $moment->image = $image;
        }
        $moment->tanggal = $request->tanggal;
        $moment->save();
        return redirect()->route('moment.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $moment = Moment::find($id);
        $moment->delete();
        return redirect()->route('moment.index');
    }
}
