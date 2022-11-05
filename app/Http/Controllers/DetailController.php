<?php

namespace App\Http\Controllers;

use App\Models\User;

class DetailController extends Controller
{
    public function showDetailForm($user_id)
    {
        //employee_idがnullだったらエラー表示
        $user = User::find($user_id);
        if (is_null($user_id)) {
            return 'エラー';
        }
        return view('employee.detail', compact('user'));
    }
}
