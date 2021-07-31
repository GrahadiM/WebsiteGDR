<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use App\Models\Pesanan;
use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pembayarans = Pembayaran::all();
        return view('admin.pembayaran.index', compact('pembayarans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pesanans = Pesanan::all();
        return view('admin.pembayaran.create', compact('pesanans'));
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
            'name' => 'required',
            'phone' => 'required',
            'pesanan_id' => 'required',
            'payment_amount' => 'required',
            // 'image' => 'required|mimes:jpg,png,jpeg',
            // 'status' => 'required',
        ]);

        if($request->hasFile('image')){
            $file = $request->file("image");
            $fileName = time() . "." . $file->getClientOriginalExtension();

            $file->move('image/pembayaran/', $fileName);
            Pembayaran::create([
                "name" => $request->name,
                "phone" => $request->phone,
                "pesanan_id" => $request->pesanan_id,
                "payment_amount" => $request->payment_amount,
                "image" => $fileName,
                "status" => 'BL',
            ]);
        }
        return redirect()->route('pembayaran.index')->with('success', 'Pembayaran Created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pembayaran  $pembayaran
     * @return \Illuminate\Http\Response
     */
    public function show(Pembayaran $pembayaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pembayaran  $pembayaran
     * @return \Illuminate\Http\Response
     */
    public function edit(Pembayaran $pembayaran)
    {
        $pembayaran = Pembayaran::find($pembayaran->id);
        return view('admin.pembayaran.edit', compact('pembayaran'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pembayaran  $pembayaran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pembayaran $pembayaran)
    {
        // dd($request->all());
        $request->validate([
            'status' => 'required',
        ]);
        $pembayaran = Pembayaran::find($pembayaran->id);
        $pembayaran->update(["status" => $request->status]);
        return redirect()->route('pembayaran.index')->with('success', 'Pembayaran Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pembayaran  $pembayaran
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pembayaran $pembayaran)
    {
        //
    }

    public function validasi(Pembayaran $pembayaran)
    {
        $pembayaran;
        return view('admin.pembayaran.validasi-pembayaran');
    }
}
