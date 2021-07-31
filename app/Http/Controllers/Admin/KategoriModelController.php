<?php

namespace App\Http\Controllers\Admin;

use App\Models\KategoriModel;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\KategoriTipe;

class KategoriModelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $models = KategoriModel::orderBy('title', 'ASC')->get();
        return view('admin.model.index', compact('models'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipes = KategoriTipe::all();
        return view('admin.model.create', compact('tipes'));
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
            'tipe_id' => 'required',
            'title' => 'required|max:50',
        ]);

        KategoriModel::create([
            'tipe_id' => $request->tipe_id,
            'title' => $request->title,
            'slug'  => Str::slug($request->title),
        ]);
        return redirect()->route('kategori-model.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\KategoriModel  $model
     * @return \Illuminate\Http\Response
     */
    public function show(KategoriModel $model)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\KategoriModel  $model
     * @return \Illuminate\Http\Response
     */
    public function edit(KategoriModel $model, $id)
    {
        $tipes = KategoriTipe::all();
        $model = KategoriModel::find($id);
        return view('admin.model.update', compact('model', 'tipes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\KategoriModel  $model
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KategoriModel $model, $id)
    {
        $request->validate([
            'title' => 'required|max:50',
        ]);

        $model = KategoriModel::find($id);
        $model->update([
            'title' => $request->title,
            'slug'  => Str::slug($request->title),
        ]);
        return redirect()->route('kategori-model.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\KategoriModel  $model
     * @return \Illuminate\Http\Response
     */
    public function destroy(KategoriModel $model, $id)
    {
        $model = KategoriModel::find($id);
        $model->delete();
        return redirect()->route('kategori-model.index');
    }
}
