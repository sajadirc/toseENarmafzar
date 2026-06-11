@extends('layouts.panel.master')
@section('title', 'مدیریت کاربران')
@section('content')
    <div class="bg-light rounded p-3">
        <h4 class="border-start border-primary border-4  text-dark p-2 ps-1 h-6 ms-1  mb-4 fw-bold">ویرایش کاربر</h4>
        <form class="form-control form p-2 " action="{{ route('panel.users.update',$user->id) }}" method="post">
            @csrf
            @method('put')
            {{-- name here --}}
            <label class="mt-2 mb-1" for="name">نام:</label>
            <input class="form-control" type="text" name="name" id="name" value="{{ $user->name }}">

            {{-- email input --}}
            <label class="mt-2 mb-1" for="email"> آدرس ایمیل: <span class="text-danger">(الزامی)</span></label>
            <input class="form-control" type="email" name="email" id="email" value="{{ $user->email }}">

            {{-- password set --}}
            <label class="mt-2 mb-1" for="password">کلمه عبور: <span class="text-danger">(درصورت لزوم به تغییر مقدار را وارد نمایید)</span></label>
            <input class="form-control" type="password" name="password" id="password">



            <label class="mt-3 mb-1" for="">نقش:</label>

            {{-- role type --}}
            <div class="d-flex">
                <div class="form-check mx-2">
                    <input class="form-check-input" type="radio" name="type" id="user" {{ $user->type == 0 ? 'checked' : ' ' }} value="0">
                    <label class="form-check-label" for="user">
                        کاربر
                    </label>
                </div>

                <div class="form-check mx-2">
                    <input class="form-check-input" type="radio" name="type" id="writer" {{ $user->type == 1 ? 'checked' : ' ' }} value="1">
                    <label class="form-check-label" for="writer">
                        نویسنده
                    </label>
                </div>

                <div class="form-check mx-2">
                    <input class="form-check-input" type="radio" name="type" id="admin" {{ $user->type == 2 ? 'checked' : ' ' }} value="2">
                    <label class="form-check-label" for="admin">
                        مدیر
                    </label>
                </div>
            </div>

            <button class="btn btn-success my-2 w-100" type="submit">ویرایش</button>
        </form>
    </div>
@endsection
