<?php

namespace App\Http\Controllers\Admin\Progres;

use App\Http\Controllers\Controller;
use App\Models\Pesanan;
use App\Models\Progres;
use App\Models\User;
use Illuminate\Http\Request;

class ProgresMaketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $progreses = Progres::all();
        return view('admin.progres.maket.index', compact('progreses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        $pesanans = Pesanan::all();
        return view('admin.progres.maket.create', compact('users', 'pesanans'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'user_id' => 'required',
            'pesanan_id' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg',
            'desc' => 'required|string|max:150',
        ]);

        if($request->hasFile('image')){
            $file = $request->file("image");
            $fileName = time() . "." . $file->getClientOriginalExtension();

            $file->move('image/progres/', $fileName);
            Progres::create([
                "user_id" => $request->user_id,
                "pesanan_id" => $request->pesanan_id,
                "image" => $fileName,
                "desc" => $request->desc,
            ]);
        }

        session()->flash('success', "Progres Created!!");

        return redirect()->route('progres-maket.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $progres = Progres::find($id);
        $users = User::all();
        $pesanans = Pesanan::all();
        return view('admin.progres.maket.update', compact('progres', 'users', 'pesanans'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Progres $progres, $id)
    {
        // dd($request->all());
        $request->validate([
            'user_id' => 'required',
            'pesanan_id' => 'required',
            // 'image' => 'required|mimes:jpg,png,jpeg',
            'desc' => 'required|string|max:150',
        ]);

        $progres = Progres::find($id);
        
        if($request->hasFile('image')){
            $file = $request->file("image");
            $fileName = time() . "." . $file->getClientOriginalExtension();

            $file->move('image/progres/', $fileName);
            $progres->update([
                "user_id" => $request->user_id,
                "pesanan_id" => $request->pesanan_id,
                "image" => $fileName,
                "desc" => $request->desc,
            ]);
        }
        
        // session()->flash('success', "Progres Updated!!");

        return redirect()->route('progres-maket.index')->with('success', "Progres Updated!!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $progres = Progres::find($id);
        $progres->delete();
        return redirect()->route('progres-maket.index')->with('success', "Progres Deleted!!");
    }
}
