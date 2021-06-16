<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;

class AdminController extends Controller
{
    public function index()
    {
        $listAdmin = Admin::paginate(10);
        return view('admin.index')->with('listAdmin',$listAdmin);
    }

    public function store(AdminRequest $request)
    {
        if ($request->isMethod('POST')) {
            $input = [
                'username' => $request->input('username'),
                'password' => Hash::make($request->input('password')),
                'email'    => $request->input('email'),
                'fullname' => $request->input('fullname'),
                'phone'    => $request->input('phone'),
                'address'  => $request->input('address'),
                'image'    => $request->file('image'),
            ];
            
            if ($input['image']) {
                $imgUploadExt = strtolower($input['image']->extension());
                $validExt = ['jpg', 'jpeg', 'png', 'gif'];
                if (in_array($imgUploadExt, $validExt)) {
                    $imgPath = 'images/avatar/' . $input['username'];
                    if (!file_exists($imgPath)) {
                        mkdir(public_path($imgPath), 0777, true);
                    }
                    $imgFilename = date('Ymd') . '_' . time() . '.jpg';
                    $uploadImg = $input['image']->move($imgPath, $imgFilename);
                    if ($uploadImg) {
                        $input['image'] = $uploadImg->getPathName();
                    }
                } else {
                    $message = "Vui lòng chọn ảnh đúng định dạng!";
                }
            }
            $saveAdmin = Admin::create($input);
            if ($saveAdmin) {
                return redirect('cms/admin/index');
            }
        }
        return view('admin.store');
    }

    public function edit($id, Request $request)
    {
        $findAdmin = Admin::find($id);
        return view('admin.edit');
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
