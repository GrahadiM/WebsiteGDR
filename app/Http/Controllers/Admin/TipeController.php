<?php

namespace App\Http\Controllers\Admin;

use App\Models\KategoriTipe;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipes = KategoriTipe::orderBy('title', 'ASC')->get();
        return view('admin.tipe.index', compact('tipes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tipe.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:50',
        ]);

        KategoriTipe::create([
            'title' => $request->title,
            'slug'  => Str::slug($request->title),
        ]);
        return redirect()->route('kategori-tipe.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tipe  $tipe
     * @return \Illuminate\Http\Response
     */
    public function show(KategoriTipe $tipe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tipe  $tipe
     * @return \Illuminate\Http\Response
     */
    public function edit(KategoriTipe $tipe, $id)
    {
        $tipe = KategoriTipe::find($id);
        return view('admin.tipe.update', compact('tipe'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tipe  $tipe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KategoriTipe $tipe, $id)
    {
        $request->validate([
            'title' => 'required|max:50',
        ]);

        $tipe = KategoriTipe::find($id);
        $tipe->update([
            'title' => $request->title,
            'slug'  => Str::slug($request->title),
        ]);
        return redirect()->route('kategori-tipe.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tipe  $tipe
     * @return \Illuminate\Http\Response
     */
    public function destroy(KategoriTipe $tipe, $id)
    {
        $tipe = KategoriTipe::find($id);
        $tipe->delete();
        return redirect()->route('kategori-tipe.index');
    }
}
