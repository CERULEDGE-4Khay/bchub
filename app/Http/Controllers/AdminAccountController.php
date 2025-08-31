<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminAccountController extends Controller
{
    public function index()
    {
        // Ambil hanya user yang login (admin) bukan semua user
        $account = auth()->user();
        return view('dashboard.admin.account.index', compact('account'));
    }

    public function edit($id)
    {
        $account = User::findOrFail($id);
        return view('dashboard.admin.account.edit', compact('account'));
    }

    public function update(Request $request, $id)
    {
    $account = User::findOrFail($id);

    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email',
        'phone' => 'nullable|string|max:15',
        'password' => 'nullable|min:6|confirmed',
        'avatar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        'default_avatar' => 'nullable|string',
    ]);

    $account->name = $request->name;
    $account->email = $request->email;
    $account->phone = $request->phone;

    // 🔹 Pilih avatar default
    if ($request->default_avatar) {
        $account->avatar = $request->default_avatar;
    }

    // 🔹 Upload file baru
    if ($request->hasFile('avatar')) {
        $filename = time().'_'.$request->avatar->getClientOriginalName();
        $request->avatar->move(public_path('uploads/avatars'), $filename);
        $account->avatar = 'uploads/avatars/'.$filename;
    }

    if ($request->password) {
        $account->password = bcrypt($request->password);
    }

    $account->save();

    return redirect()->route('accounts.index')->with('success', 'Profil berhasil diperbarui!');
    }

}
