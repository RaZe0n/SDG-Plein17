<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        $users = DB::table('users')->simplePaginate(10);

        return view('admin.users', ['users' => $users]);
    }

    public function destroy(Request $request, $id)
    {
        DB::table('users')->where('id', $id)->delete();

        return redirect()->route('admin.users')->with('success', 'User deleted successfully');
    }

    public function edit($id)
    {
        $user = DB::table('users')->where('id', $id)->first();

        return view('admin.users.edit', ['user' => $user]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'firstname' => 'required|string',
            'lastname' => 'required|string',
            'email' => 'required|email',
            'company' => 'required|string',
            'company_sector' => 'required|string',
            'role' => 'required|string',
        ]);

        DB::table('users')->where('id', $id)->update([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'company' => $request->company,
            'sector' => $request->company_sector,
            'is_admin' => $request->role,
        ]);

        return redirect()->route('admin.users')->with('success', 'User updated successfully');
    }
}
