<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use League\CommonMark\Extension\CommonMark\Node\Inline\Strong;

class ProfileController extends Controller
{
    public function index()
    {
        return view('profile.index', [
            'user' => Auth()->user(),
        ]);
    }

    public function password(Request $request)
    {
        $request->validate([
            'new_password' => 'required|min:6|confirmed',
        ]);

        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);

        return back()->with('success', 'Password berhasil diupdate menjadi ' . $request->new_password . '. Harap ingat baik-baik akun dan password yang digunakan.');

    }

    public function detail(Request $request)
    {
        $request->validate([
           'name' => 'required|min:5',
           'email' => 'required|email'
        ]);

        User::whereId(Auth()->user()->id)->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);

        return back()->with('success', 'Detail data user berhasil diupdate!');
    }
}
