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
        $employees = Employee::all();
        $departments = Department::all();
        $divisions = Division::all();
        $positions = Position::all();
        $birthmonths = Birthmonth::all();
        $bloods = Blood::all();
        $user = Auth::user();

        return view('employee.index', compact('employees', 'departments', 'divisions', 'positions', 'birthmonths', 'bloods', 'user'));
    }

    public function showDetailForm($employee_id)
    {
        //employee_idがnullだったらエラー表示
        $employee = Employee::find($employee_id);
        if (is_null($employee_id)) {
            return 'エラー';
        }
        return view('employee.detail', compact('employee'));
    }

    public function search(Request $request)
    {
        $employees = Employee::searchEmployees($request->blood_id, $request->department_id, $request->division_id, $request->position_id, $request->birthmonth_id, $request->name);
        $bloods = Blood::all();
        $departments = Department::all();
        $divisions = Division::all();
        $positions = Position::all();
        $birthmonths = Birthmonth::all();
        $user = Auth::user();

        return view('employee.index', compact('bloods', 'employees', 'departments', 'divisions', 'positions', 'birthmonths', 'user'));
    }
}
