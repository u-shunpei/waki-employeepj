<?php

namespace App\Http\Controllers;

use App\Models\Birthmonth;
use App\Models\Blood;
use App\Models\Department;
use App\Models\Division;
use App\Models\Employee;
use App\Models\Position;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EmployeeController extends Controller
{
    public function index()
    {
        $departments = Department::all();
        $divisions = Division::all();
        $positions = Position::all();
        $birthmonths = Birthmonth::all();
        $bloods = Blood::all();
        $us = Auth::user();
        $users = User::all();

        return view('employee.index', compact( 'departments', 'divisions', 'positions', 'birthmonths', 'bloods', 'us', 'users'));
    }

    public function showDetailForm($user_id)
    {
        //employee_idがnullだったらエラー表示
        $user = User::find($user_id);
        if (is_null($user_id)) {
            return 'エラー';
        }
        return view('employee.detail', compact('user'));
    }

//    public function search(Request $request)
//    {
//        $employees = Employee::searchEmployees($request->blood_id, $request->department_id, $request->division_id, $request->position_id, $request->birthmonth_id, $request->name);
//        $bloods = Blood::all();
//        $departments = Department::all();
//        $divisions = Division::all();
//        $positions = Position::all();
//        $birthmonths = Birthmonth::all();
//        $user = Auth::user();
//
//        return view('employee.index', compact('bloods', 'employees', 'departments', 'divisions', 'positions', 'birthmonths', 'user'));
//    }
}
