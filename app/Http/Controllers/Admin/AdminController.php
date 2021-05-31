<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;

class AdminController extends Controller
{
    public function login(Request $request)
    {
        if ($request->isMethod('POST')) {
            $inputRequest = $request->all();
            $checkAdmin = Admin::where([
                'username' => $inputRequest['username'],
                'password' => $inputRequest['password'],
                'deleted'  => 0
            ])->get();
            if (count($checkAdmin) > 0) {
                return redirect('admin/index');
            } else {
                $message = 'Wrong username or password';
                return view('admin.login')->with('errors', $message);
            }
        }
        return view('admin.login');
    }
    
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
                'image'    => $request->file('image'),
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
