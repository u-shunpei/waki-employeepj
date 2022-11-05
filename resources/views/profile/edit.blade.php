@extends('layouts.default')

@section('head')
    <link rel="stylesheet" href="/css/profile/create.css">
@endsection

@section('content')
    <form action="{{ route('edit', $user->id) }}" method="POST" enctype="multipart/form-data" class="profile-crete">
        @csrf
        <input type="hidden" name="id" value="{{ $user->id }}">
        <input type="text" name="name" placeholder="ワキ 太郎" value="" />
{{--        <input type="file" name="image_url" />--}}
        <button type="submit">登録</button>
    </form>
@endsection
