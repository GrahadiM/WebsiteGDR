<?php

namespace App\Http\Controllers\Admin\Pesanan;

use App\Models\Job;
use App\Models\User;
use App\Models\Pesanan;
use Illuminate\Http\Request;
use App\Models\KategoriTipe;
use App\Models\KategoriModel;
use App\Http\Controllers\Controller;

class PesananDesainController extends Controller
{
    public function index()
    {
        $pesanans = Pesanan::all();
        return view('admin.pesanan.desainBangun.index', compact('pesanans'));
    }

    public function create()
    {
        $jobs = Job::all();
        $users = User::all();
        $tipes = KategoriTipe::all();
        $models = KategoriModel::all();
        return view('admin.pesanan.desainBangun.create', compact('users', 'tipes', 'models', 'jobs'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'user_id' => 'required',
            'tipe_id' => 'required',
            'model_id' => 'required',
            'job_id' => 'required',
            'building_area' => 'nullable',
            'building_length' => 'nullable',
            'building_width' => 'nullable',
            'package_type' => 'required',
            // 'price_package' => 'required',
            'address' => 'required',
        ]);

        Pesanan::create([
            'user_id' => $request->user_id,
            'tipe_id' => $request->tipe_id,
            'model_id' => $request->model_id,
            'job_id' => $request->job_id,
            'building_area' => $request->building_area,
            'building_length' => $request->building_length,
            'building_width' => $request->building_width,
            'package_type' => $request->package_type,
            // 'price_package' => $request->price_package,
            'address' => $request->address,
        ]);

        return redirect()->route('pesanan-desain.index')->with('success', 'Pesanan Created!!');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $pesanan = Pesanan::find($id);
        $jobs = Job::all();
        $users = User::all();
        $tipes = KategoriTipe::all();
        $models = KategoriModel::all();
        return view('admin.pesanan.desainBangun.update', compact('pesanan', 'users', 'tipes', 'models', 'jobs'));
    }

    public function update(Request $request, $id)
    {
        // dd($request->all());
        $request->validate([
            'user_id' => 'required',
            'tipe_id' => 'required',
            'model_id' => 'required',
            'job_id' => 'required',
            'building_area' => 'nullable',
            'building_length' => 'nullable',
            'building_width' => 'nullable',
            'package_type' => 'required',
            // 'price_package' => 'required',
            'address' => 'required',
        ]);
        
        $pesanan = Pesanan::find($id);
        $pesanan->update([
            'user_id' => $request->user_id,
            'tipe_id' => $request->tipe_id,
            'model_id' => $request->model_id,
            'job_id' => $request->job_id,
            'building_area' => $request->building_area,
            'building_length' => $request->building_length,
            'building_width' => $request->building_width,
            'package_type' => $request->package_type,
            // 'price_package' => $request->price_package,
            'address' => $request->address,
        ]);

        return redirect()->route('pesanan-desain.index')->with('success', 'Pesanan Updated!!');
    }

    public function destroy($id)
    {
        $pesanan = Pesanan::find($id);
        $pesanan->delete();
        return redirect()->route('pesanan-desain.index')->with('success', 'Pesanan Deleated!!');
    }
}
