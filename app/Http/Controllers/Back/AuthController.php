<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Flasher\Prime\FlasherInterface;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('back.auth.login');
    }

    public function loginPost(Request $request, FlasherInterface $flasher)
    {
        //dd($request->post());  dd laravel'in vermiş olduğu bir helper yani fonksiyon. İçindeki data yı ekrana basar. print_r() yerine kullanılabilir.
        if (Auth::attempt(['email'=>$request->email,'password'=>$request->password]))
        {
            $flasher->addSuccess(Auth::user()->name,'Tekrardan Hoşgeldiniz!');
            return redirect()->route('admin.dashboard');
        }
        return redirect()->route('admin.login')->withErrors('Email adresi veya şifre hatalı!');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin.login');
    }
}
