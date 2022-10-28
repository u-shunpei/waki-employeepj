<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    public function birthmonth()
    {
        return $this->belongsTo('App\Models\Birthmonth');
    }

    public function blood()
    {
        return $this->belongsTo('App\Models\Blood');
    }

    public function department()
    {
        return $this->belongsTo('App\Models\Department');
    }

    public function division()
    {
        return $this->belongsTo('App\Models\Division');
    }

    public function position()
    {
        return $this->belongsTo('App\Models\Position');
    }

    public function User()
    {
        return $this->belongsTo('App\Models\User');
    }

    public static function searchEmployees($blood_id, $position_id, $department_id, $division_id, $birthmonth_id, $keyword)
    {
        $query = Employee::query();

        if (!empty($blood_id)) {
            $query->whereHas('blood', function ($query) use ($blood_id) {
                $query->where('id', $blood_id);
            });
        } else {
            $query->with('blood');
        }

        if (!empty($position_id)) {
            $query->whereHas('position', function ($query) use ($position_id) {
                $query->where('id', $position_id);
            });
        } else {
            $query->with('position');
        }

        if (!empty($department_id)) {
            $query->whereHas('department', function ($query) use ($department_id) {
                $query->where('id', $department_id);
            });
        } else {
            $query->with('department');
        }

        if (!empty($division_id)) {
            $query->whereHas('division', function ($query) use ($division_id) {
                $query->where('id', $division_id);
            });
        } else {
            $query->with('division');
        }

        if (!empty($birthmonth_id)) {
            $query->whereHas('birthmonth', function ($query) use ($birthmonth_id) {
                $query->where('id', $birthmonth_id);
            });
        } else {
            $query->with('birthmonth');
        }

        if (!empty($keyword)) {
            $query->where('name', 'like', "%$keyword%");
        }

        $employees = $query->get();

        return $employees;
    }
}
