@extends('layouts.master')

@section('title', 'سیستم احراز هویت حسینی نیوز')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4 class="text-center mt-5 mb-3">صفحه ثبت نام سایت خبری حسینی نیوز</h4>
                <form action="{{ route('register.store') }}" class="form form-control bg-dark text-light" method="POST">
                    @csrf
                    {{-- Name Here --}}
                    <label class="mb-2 mt-3 text-light" for="name">نام:</label>
                    <input class="form-control" type="text" name="name" id="name">

                    {{-- Email Here --}}
                    <label class="mb-2 mt-3 text-light" for="email">آدرس ایمیل:</label>
                    <input class="form-control" type="text" name="email" id="email">


                    {{-- Password Here --}}
                    <label class="mb-2 mt-3 text-light" for="password">کلمه عبور:</label>
                    <input class="form-control" type="password" name="password" id="password">

                    {{-- User type --}}
                    <label class="mb-2 mt-3 text-light" for="type">نوع کاربر</label>
                    <br>

                    <label class="mb-2 mt-3 text-light" for="user">کاربر</label>
                    <input class="text-light" type="radio" name="type" id="user" value="user" checked>

                    <label class="ms-4 mb-2 mt-3 text-light" for="author">نویسنده</label>
                    <input type="radio" name="type" id="author" value="author">

                    <div class="d-flex justify-content-between align-item-center">
                        <a class="mt-2 fw-bold" href="{{ route('login.index') }}">ورود</a>
                        <button class="btn btn-success mt-3 mb-2" type="submit">ثبت نام</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
