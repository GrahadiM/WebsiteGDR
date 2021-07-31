<?php

namespace App\Http\Controllers\Admin\Pesanan;

use App\Models\City;
use App\Models\User;
use App\Models\Pesanan;
use App\Models\Districts;
use App\Models\Portofolio;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PesananMaketController extends Controller
{
    public function index()
    {
        $pesanans = Pesanan::all();
        return view('admin.pesanan.maket.index', compact('pesanans'));
    }

    public function create()
    {
        $users = User::all();
        $portofolios = Portofolio::all();
        $cities = City::all();
        $districtss = Districts::all();
        return view('admin.pesanan.maket.create', compact('users', 'portofolios', 'cities', 'districtss'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'portofolio_id' => 'required',
            'city_id' => 'required',
            'districts_id' => 'required',
            'luas' => 'required',
            'panjang' => 'required',
            'lebar' => 'required',
            'price' => 'required',
            'address' => 'required',
            'desc' => 'required',
        ]);

        Pesanan::create([
            'user_id' => $request->user_id,
            'portofolio_id' => $request->portofolio_id,
            'city_id' => $request->city_id,
            'districts_id' => $request->districts_id,
            'luas' => $request->luas,
            'lebar' => $request->lebar,
            'panjang' => $request->panjang,
            'price' => $request->price,
            'address' => $request->address,
            'desc' => $request->desc,
        ]);

        return redirect()->route('pesanan-maket.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $pesanan = Pesanan::find($id);
        return view('admin.pesanan.maket.update', compact('pesanan'));
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        $pesanan = Pesanan::find($id);
        $pesanan->delete();
        return redirect()->route('pesanan-maket.index');
    }
}
