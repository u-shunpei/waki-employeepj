<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProfileRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function showEditForm($user_id)
    {
        $user = User::find($user_id);
        if (is_null($user_id)) {
            return 'エラー';
        }
        $users = User::all();

        return view('profile.edit', [
            'user' => $user,
            'users' => $users,
        ]);
    }

    public function edit(Request $request, $user_id)
    {
        $users = User::find($user_id);
        $users->id = Auth::id();
        $users->name = $request->input('name');

        $users->save();

        return view('profile.success');
    }

    public function success($user_id)
    {
        $users = User::find($user_id);

        return view('profile.success', compact('users'));
    }
}
