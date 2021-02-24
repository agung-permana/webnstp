<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Unitkerja;
use App\User;

class UserController extends Controller
{

    public function index()
    {
        $unit_kerja = Unitkerja::all();
        $user = User::all();
        return view('admin.user.index', compact('user', 'unit_kerja'));
    }

    public function create()
    {
        return view('admin.user.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'username' => 'required|',
            'password' => 'required|confirmed|min:5'
        ]);

        $user = New User;
        $user->name = $request->name;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->level = $request->level;
        $user->password = bcrypt($request->password);
        $user->save();
        alert()->success('Berhasil','Data Berhasil Disimpan');
        return redirect('/user');
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('admin.user.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);

        if ($request->input('password')) {
            $user->name = $request->name;
            $user->username = $request->username;
            $user->email = $request->email;
            $user->level = $request->level;
            $user->password = bcrypt($request->password);
        }else{
            $user->name = $request->name;
            $user->username = $request->username;
            $user->email = $request->email;
            $user->level = $request->level;
        }
        $user->update();
        alert()->success('Berhasil','Data Berhasil Diedit');
        return redirect('/user');
    }

    public function delete($id)
    {
        User::find($id)->delete();
        alert()->success('Berhasil','Data Berhasil Dihapus');
        return redirect('/user');
    }
}
