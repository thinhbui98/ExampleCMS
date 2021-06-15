<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        $listAdmin = Admin::get();
        return view('admin.index')->with('listAdmin',$listAdmin);
    }

    public function store(Request $request)
    {
        if ($request->isMethod('POST')) {
            $input = [
                'username' => $request->input('username'),
                'password' => $request->input('password'),
                'email'    => $request->input('email'),
                'fullname' => $request->input('fullname'),
                'phone'    => $request->input('phone'),
                'address'  => $request->input('address'),
                'image'    => $request->input('image'),
            ];
            if ($input['image']) {
                
            }
        }
        return view('admin.store');
    }

    public function show($id, Request $request)
    {
        return 123;
    }

    public function destroy($id, Request $request)
    {
        return 456;
    }
}
