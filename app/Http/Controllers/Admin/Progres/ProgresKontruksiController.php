<?php

namespace App\Http\Controllers\Admin\Progres;

use App\Http\Controllers\Controller;
use App\Models\Job;
use App\Models\Pesanan;
use App\Models\Progres;
use App\Models\User;
use Illuminate\Http\Request;

class ProgresKontruksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $progreses = Progres::all();
        return view('admin.progres.kontruksiBangun.index', compact('progreses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jobs = Job::all();
        $users = User::all();
        $pesanans = Pesanan::all();
        return view('admin.progres.kontruksiBangun.create', compact('jobs', 'users', 'pesanans'));
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
            'title' => 'required',
            'user_id' => 'required',
            'pesanan_id' => 'required',
            'job_id' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg',
            'desc' => 'required|string|max:150',
        ]);

        if($request->hasFile('image')){
            $file = $request->file("image");
            $fileName = time() . "." . $file->getClientOriginalExtension();

            $file->move('image/progres/', $fileName);
            Progres::create([
                "title" => $request->title,
                "user_id" => $request->user_id,
                "pesanan_id" => $request->pesanan_id,
                "job_id" => $request->job_id,
                "image" => $fileName,
                "status" => "non-active",
                "desc" => $request->desc,
            ]);
        }

        session()->flash('success', "Progres Created!!");

        return redirect()->route('progres-kontruksi.index');
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
        return view('admin.progres.kontruksiBangun.update', compact('progres', 'users', 'pesanans'));
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
            'title' => 'required',
            'user_id' => 'required',
            'pesanan_id' => 'required',
            'job_id' => 'required',
            'image' => 'nullable|mimes:jpg,png,jpeg',
            'desc' => 'required|string|max:150',
        ]);

        $progres = Progres::find($id);
        
        if($request->hasFile('image')){
            $file = $request->file("image");
            $fileName = time() . "." . $file->getClientOriginalExtension();

            $file->move('image/progres/', $fileName);
            $progres->update([
                "title" => $request->title,
                "user_id" => $request->user_id,
                "pesanan_id" => $request->pesanan_id,
                "job_id" => $request->job_id,
                "image" => $fileName,
                "status" => "non-active",
                "desc" => $request->desc,
            ]);
        }
        
        // session()->flash('success', "Progres Updated!!");

        return redirect()->route('progres-kontruksi.index')->with('success', "Progres Updated!!");
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
        return redirect()->route('progres-kontruksi.index')->with('success', "Progres Deleted!!");
    }
}
