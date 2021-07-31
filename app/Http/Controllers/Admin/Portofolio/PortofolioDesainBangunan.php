<?php

namespace App\Http\Controllers\Admin\Portofolio;

use App\Models\Job;
use App\Models\User;
use App\Models\Portofolio;
use Illuminate\Http\Request;
use App\Models\KategoriTipe;
use App\Models\KategoriModel;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;

class PortofolioDesainBangunan extends Controller
{
    public function index()
    {
        $portofolios = Portofolio::where('job_id', '1')->get();
        return view('admin.portofolio.desainBangun.index', compact('portofolios'));
    }

    public function create()
    {
        $users = User::all();
        $tipes = KategoriTipe::all();
        $models = KategoriModel::all();
        $jobs = Job::all();
        return view('admin.portofolio.desainBangun.create', compact('users', 'tipes', 'models', 'jobs'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $this->validate($request, [
            'title' => 'required',
            'user_id' => 'required',
            'model_id' => 'required',
            'job_id' => 'required',
            'thumbnail' => 'nullable|image|mimes:jpg,png,jpeg', 
            'building_area' => 'nullable',
            'building_length' => 'nullable',
            'building_width' => 'nullable',
            // 'desc' => 'required',
        ]);

        $data = $request->only([
            'title',
            'user_id',
            'model_id',
            'job_id',
            'building_area',
            'building_length',
            'building_width',
            'desc',
        ]);

        if($request->hasFile('thumbnail')){
            // $thumbnail = $request->thumbnail->store('thumbnail');
            $thumbnail = $this->uploadGambar($request->thumbnail);
            $data['thumbnail'] = $thumbnail;
        }
        
        Portofolio::create($data);

        session()->flash('success', "Portofolio Created!!");

        return redirect()->route('portofolio-desain.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $portofolio = Portofolio::find($id);
        $tipes = KategoriTipe::all();
        $models = KategoriModel::all();
        return view('admin.portofolio.desainBangun.update', compact('portofolio', 'tipes', 'models'));
    }

    public function update(Request $request, Portofolio $portofolio, $id)
    {
        // dd($request->all());
        $this->validate($request, [
            'title' => 'required',
            'user_id' => 'required',
            'model_id' => 'required',
            'job_id' => 'required',
            'thumbnail' => 'nullable|image|mimes:jpg,png,jpeg', 
            'building_area' => 'nullable',
            'building_length' => 'nullable',
            'building_width' => 'nullable',
            // 'desc' => 'nullable',
        ]);

        $data = $request->only([
            'title',
            'user_id',
            'model_id',
            'job_id',
            'building_area',
            'building_length',
            'building_width',
            'desc',
        ]);

        if($request->hasFile('thumbnail')){
            // $thumbnail = $request->thumbnail->store('thumbnail');
            $thumbnail = $this->uploadGambar($request->thumbnail);

            if($portofolio->thumbnail !== "thumbnail.jpg"){
                File::delete('image/portofolio/'.$portofolio->thumbnail);
            }

            $data['thumbnail'] = $thumbnail;
        }
        
        $portofolio = Portofolio::find($id);
        $portofolio->update($data);

        session()->flash('success', "Portofolio Updated!!");

        return redirect()->route('portofolio-desain.index');
    }

    public function destroy($id)
    {
        $portofolio = Portofolio::find($id);
        $portofolio->delete();
        return redirect()->route('portofolio-desain.index');
    }

    public function uploadGambar($thumbnail)
    {

        $thumbnail->move(public_path('image/portofolio/'), $thumbnail->getClientOriginalName());

        return $thumbnail->getClientOriginalName();
    }
}
