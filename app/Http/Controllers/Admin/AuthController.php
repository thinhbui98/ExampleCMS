<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        if ($request->isMethod('POST')) {
            $credentials = $request->only(['email', 'password']);
            if (!Auth::guard('admin')->attempt($credentials)) {
                $message = 'Wrong username or password';
                return view('auth.login')->with('errors', $message);
            }
            return redirect('cms/admin/index');
        }
        return view('auth.login');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('auth/login');
    }
}
