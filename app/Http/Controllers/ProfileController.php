<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Role;
use App\Models\City;
use App\Models\Status;
use App\Models\Districts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = User::where('id', Auth::user()->id)->first();
        $roles = Role::all();
        $statuses = Status::all();
    	return view('profile.index', compact('user', 'roles', 'statuses'));
    }

    public function update(Request $request, $id)
    {
        // dd($request->all());
        $request->validate([
            "name" => "required|string",
            "email" => "required|email|unique:users,id," . $id,
            "password" => "required",
            // "avatar" => "required|mimes:jpeg,jpg,png",
            "phone" => "required|numeric",
            "gender" => "required",
            "address" => "required",
        ]);

    	$user = User::where('id', Auth::user()->id)->first();

        if ($request->hasFile("avatar")) {
            $file = $request->file("avatar");
            $filename = time() . "." . $file->getClientOriginalExtension();

            $file->move('image/profile', $filename);

            // File::delete('assets/image/profile' . $user->avatar);

            // Jika user mengganti passwornya password 
            if ($user->password != $request->password) {
                $user->update([
                    "name" => $request->name,
                    "email" => $request->email,
                    "password" => Hash::make($request->password),
                    "avatar" => $filename,
                    "phone" => $request->phone,
                    "gender" => $request->gender,
                    "address" => $request->address,
                ]);
            } else {
                // Jika user tidak mengganti passwordnya
                $user->update([
                    "name" => $request->name,
                    "email" => $request->email,
                    "password" => $request->password,
                    "avatar" => $filename,
                    "phone" => $request->phone,
                    "gender" => $request->gender,
                    "address" => $request->address,
                ]);
            }
        } else {
            // Jika user tidak merubah gambar
            // Jika user mengganti passwornya password 
            if ($user->password != $request->password) {
                $user->update([
                    "name" => $request->name,
                    "email" => $request->email,
                    "password" => Hash::make($request->password),
                    "phone" => $request->phone,
                    "gender" => $request->gender,
                    "address" => $request->address,
                ]);
            } else {
                // Jika user tidak mengganti passwordnya
                $user->update([
                    "name" => $request->name,
                    "email" => $request->email,
                    "password" => $request->password,
                    "phone" => $request->phone,
                    "gender" => $request->gender,
                    "address" => $request->address,
                ]);
            }
        }
    	
    	return redirect('profile');
    }
}
