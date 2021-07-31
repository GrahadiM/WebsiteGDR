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

class PortofolioMaket extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portofolios = Portofolio::where('job_id', '3')->get();
        return view('admin.portofolio.maket.index', compact('portofolios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        $tipes = KategoriTipe::all();
        $models = KategoriModel::all();
        $jobs = Job::all();
        return view('admin.portofolio.maket.create', compact('users', 'tipes', 'models', 'jobs'));
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
        $this->validate($request, [
            'name' => 'required',
            'user_id' => 'required',
            'tipe_id' => 'required',
            'model_id' => 'required',
            'job_id' => 'required',
            'thumbnail' => 'nullable|image|mimes:jpg,png,jpeg',         
            'price' => 'required',
        ]);

        $data = $request->only([
            'name',
            'user_id',
            'tipe_id',
            'model_id',
            'job_id',
            'price',
            'desc'
        ]);

        if($request->hasFile('thumbnail')){
            // $thumbnail = $request->thumbnail->store('thumbnail');
            $thumbnail = $this->uploadGambar($request->thumbnail);
            $data['thumbnail'] = $thumbnail;
        }
        
        Portofolio::create($data);

        session()->flash('success', "Portofolio Created!!");

        return redirect()->route('portofolio-maket.index');
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
        $portofolio = Portofolio::find($id);
        $tipes = KategoriTipe::all();
        $models = KategoriModel::all();
        return view('admin.portofolio.maket.update', compact('portofolio', 'tipes', 'models'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Portofolio $portofolio, $id)
    {
        $this->validate($request, [
            'name' => 'required|string|max:100',
            'tipe_id' => 'required',
            'model_id' => 'required',
            'thumbnail' => 'nullable|image|mimes:jpg,png,jpeg',         
            'price' => 'required',
            'desc' => 'required|string|max:150',
        ]);

        $data = $request->only(['name', 'tipe_id', 'model_id', 'price', 'desc']);

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

        return redirect()->route('portofolio-maket.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $portofolio = Portofolio::find($id);
        $portofolio->delete();
        return redirect()->route('portofolio-maket.index');
    }

    public function uploadGambar($thumbnail)
    {

        $thumbnail->move(public_path('image/portofolio/'), $thumbnail->getClientOriginalName());

        return $thumbnail->getClientOriginalName();
    }
}
