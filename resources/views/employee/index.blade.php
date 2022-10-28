@extends('layouts.default')

@section('head')
    <link rel="stylesheet" href="/css/employee/index.css">
    <script src="https://kit.fontawesome.com/d5b4d4baf0.js" crossorigin="anonymous"></script>
@endsection

@section('content')
    <form action="{{ route('employee.search') }}" method="POST" class="search">
        @csrf
        <select name="position_id" class="position_id" id="">
            <option value="">All</option>
            @foreach($positions as $position)
                <option value="{{ $position->id }}" name="position_name">
                    {{ $position->name }}
                </option>
            @endforeach
        </select>
        <select name="department_id" class="department_id" id="">
            <option value="">All</option>
            @foreach($departments as $department)
                <option value="{{ $department->id }}" name="department_name">
                    {{ $department->name }}
                </option>
            @endforeach
        </select>
        <select name="division_id" class="division_id" id="">
            <option value="">All</option>
            @foreach($divisions as $division)
                <option value="{{ $division->id }}" name="division_name">
                    {{ $division->name }}
                </option>
            @endforeach
        </select>
        <select name="birthmonth_id" class="birthmonth_id" id="">
            <option value="">All</option>
            @foreach($birthmonths as $birthmonth)
                <option value="{{ $birthmonth->id }}" name="birthday_name">
                    {{ $birthmonth->name }}
                </option>
            @endforeach
        </select>
        <select name="blood_id"  class="blood_id" id="">
            <option value="">All</option>
            @foreach($bloods as $blood)
                <option value="{{ $blood->id }}" name="blood_name">
                    {{ $blood->name }}
                </option>
            @endforeach
        </select>
        <input type="search" name="name" class="name" placeholder="search..."/>
        <button class="search_btn">
            <i class="fas fa-search"></i>
        </button>
    </form>
    <div class="flex__item">
        @foreach($employees as $employee)
            <a href="{{ route('showDetailForm', $employee->id) }}">
                <div class="card">
                    <div class="card__img">
                        <img src="{{ $employee->image_url }}" alt="">
                    </div>
                    <div class="card__content">
                        <div class="card__cat">{{ $employee->name }}</div>
                        <div class="tag">
                            <p class="card__position">#{{ $employee->position->name }}</p>
                            <p class="card__department">#{{ $employee->department->name }}</p>
                            <p class="card__division">#{{ $employee->division->name }}</p>
                            <p class="card__birthday">#{{ $employee->birth }}</p>
                        </div>
                    </div>
                </div>
            </a>
        @endforeach
    </div>

@endsection
