<?php

namespace App\Http\Controllers;
use Auth;
use App\Models\User;
use App\Models\Role;

use Illuminate\Http\Request;

class SystemController extends Controller
{
    public function user()
    {
        $users = User::all();
        return view('system.user.main', compact('users'));
    }

    public function role()
    {
        $roles = Role::all();
        return view('system.role.main', compact('roles'));
    }

    public function createrole()
    {
        return view('system.role.create');
    }

    public function rolestore(Request $request)
{
    // validasi form input
    $validatedData = $request->validate([
        'name' => 'required|min:2',
    ]);

    // simpan data ke database
    Role::create([
    'name' => $request->name,
    'guard_name' => $request->web,
    ]);
    // redirect ke halaman sukses
    return redirect('/system/role')->with('success', 'Data berhasil disimpan!');
    }

    public function edit_role($id){
        $roles = Role::where('id', $id)->first();
        // dd($role);
        return view('system.role.edit', compact('roles'));
    }

    public function update_role(Request $request, $id)
    {
        Role::where('id', $id)->update([
            'name'=> $request->name,
            'guard_name'=> $request->guard_name,
            
        ]);
        return redirect('/system/role');
    }

    public function delete_role(string $id)
    {
        Role::destroy($id);
        return back();
    }
}
