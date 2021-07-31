<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use App\Models\Progres;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        // $users = User::all();
        // dd($users);
        // return view('home', compact('users'));
        
        if (auth()->user()->role_id == 1){
            $mandor = User::where('role_id', '2')->get();
            $customer = User::where('role_id', '3')->get();
            $pesanan = Pesanan::all();
            $progres = Progres::all();
            return view('admin.home', compact('mandor', 'customer', 'pesanan', 'progres'));
        } elseif (auth()->user()->role_id == 2) {
            if (auth()->user()->status_id == 1){
                $pesanan = Pesanan::all();
                $progres = Progres::all();
                return view('mandor.home', compact('pesanan', 'progres'));
            } else {
                Auth::logout();
                $request->session()->invalidate();
                $request->session()->regenerateToken();
                return redirect('/');
            }
        } elseif (auth()->user()->role_id == 3) {
            return redirect()->route('beranda');
        } else {
            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
            return redirect('/');
        }
        // Auth::logout();
        // $request->session()->invalidate();
        // $request->session()->regenerateToken();
        // return redirect('/');
    }
}
