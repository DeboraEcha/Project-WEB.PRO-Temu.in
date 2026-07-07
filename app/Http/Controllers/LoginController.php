<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengguna;

class LoginController extends Controller
{
    public function index()
    {
        return view('v_login.index');
    }

    public function proses(Request $request)
    {
        $pengguna = Pengguna::where('email', $request->email)
            ->where('password', $request->password)
            ->first();

        if ($pengguna) {

            session([
                'id_pengguna' => $pengguna->id_pengguna,
                'nama' => $pengguna->nama,
                'role' => $pengguna->role
            ]);

            return redirect('/dashboard');
        }

        return redirect('/login')->with('gagal', 'Email atau password salah');
    }

    public function logout()
    {
        session()->flush();

        return redirect('/login');
    }
}
