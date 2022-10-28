<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function showDetailForm($employee_id)
    {
        //employee_idがnullだったらエラー表示
        $employee = Employee::find($employee_id);
        if (is_null($employee_id)) {
            return 'エラー';
        }
        return view('employee.detail', compact('employee'));
    }
}
