<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function edit()
    {
        $user = Auth::user();
        return view('profile.edit', compact('user'));
    }

    public function update(Request $request)
    {
        $user = Auth::user();
        $user->name = $request->input('name');
        $user->save();

        return redirect()->route('profile.edit')->with('success', 'Thông tin cá nhân đã được cập nhật thành công.');
    }
}
