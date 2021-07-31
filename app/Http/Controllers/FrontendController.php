<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\User;
use App\Models\Pesanan;
use App\Models\Portofolio;
use App\Models\KategoriTipe;
use App\Models\KategoriModel;
use App\Models\Progres;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home()
    {
        $portofolios = Portofolio::paginate(12);
        return view('frontend.home.index', compact('portofolios'));
    }
    public function portofolio()
    {
        $portofolios = Portofolio::orderBy('created_at', 'DESC')->paginate(12);
        return view('frontend.portofolio.index', compact('portofolios'));
    }
    public function desain()
    {
        $portofolios = Portofolio::where('job_id', 1)->paginate(12);
        $tipes = KategoriTipe::all();
        $models = KategoriModel::all();
        return view('frontend.portofolio.desain', compact('portofolios', 'tipes', 'models'));
    }
    public function kontruksi()
    {
        $portofolios = Portofolio::where('job_id', 2)->paginate(12);
        $tipes = KategoriTipe::all();
        $models = KategoriModel::all();
        return view('frontend.portofolio.kontruksi', compact('portofolios', 'tipes', 'models'));
    }
    public function maket()
    {
        $portofolios = Portofolio::where('job_id', 3)->paginate(12);
        $tipes = KategoriTipe::all();
        $models = KategoriModel::all();
        return view('frontend.portofolio.maket', compact('portofolios', 'tipes', 'models'));
    }
    public function portofolioDetail()
    {
        $portofolios = Portofolio::paginate(12);
        return view('frontend.portofolio.index', compact('portofolios'));
    }
    public function orderDesain()
    {
        if (auth()->user()) {
            $jobs = Job::all();
            $users = User::all();
            $tipes = KategoriTipe::all();
            $models = KategoriModel::all();
            return view('frontend.order.desain', compact('jobs', 'users', 'tipes', 'models'));
        } else {
            return redirect()->to('login');
        }
        
    }
    public function orderKontruksi()
    {
        if (auth()->user()) {
            $jobs = Job::all();
            $users = User::all();
            $tipes = KategoriTipe::all();
            $models = KategoriModel::all();
            return view('frontend.order.kontruksi', compact('jobs', 'users', 'tipes', 'models'));
        } else {
            return redirect()->to('login');
        }
    }
    public function orderPost(Request $request, Pesanan $pesanan)
    {
        // dd($request->all());
        $request->validate([
            'user_id' => 'required',
            // 'tipe_id' => 'required',
            'model_id' => 'required',
            'job_id' => 'required',
            'building_area' => 'nullable',
            'building_length' => 'nullable',
            'building_width' => 'nullable',
            'package_type' => 'required',
            // 'price_package' => 'required',
            'address' => 'required',
        ]);
        
        $user_id = auth()->user()->id;
        Pesanan::create([
            'user_id' => $user_id,
            // 'tipe_id' => $request->tipe_id,
            'model_id' => $request->model_id,
            'job_id' => $request->job_id,
            'building_area' => $request->building_area,
            'building_length' => $request->building_length,
            'building_width' => $request->building_width,
            'package_type' => $request->package_type,
            // 'price_package' => $request->price_package,
            'address' => $request->address,
        ]);

        return redirect()->back()->with('success', 'Pesanan Created!!');
    }
    public function progresList()
    {
        $progreses = Progres::all();
        return view('frontend.progres.index', compact('progreses'));
    }
    public function progres($id)
    {
        $progres = Progres::find($id);
        return view('frontend.progres.show', compact('progres'));
    }
    // public function progresDetail()
    // {
    //     return view('frontend.progres.show');
    // }
    public function contact()
    {
        return view('frontend.contact.index');
    }
}
