@extends('layouts.master')

@section('title', 'سیستم احراز هویت حسینی نیوز')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4 class="text-center mt-5 mb-3">صفحه ورود سایت خبری حسینی نیوز</h4>
                <form action="{{ route('login.index') }}" class="form form-control" method="POST">
                    @csrf
                    {{-- Email Here --}}
                    <label class="mb-2 mt-3" for="email">آدرس ایمیل:</label>
                    <input class="form-control" type="text" name="email" id="email">

                    {{-- Password Here --}}
                    <label class="mb-2 mt-3" for="password">کلمه عبور:</label>
                    <input class="form-control" type="password" name="password" id="password">

                    <div class="d-flex justify-content-between align-item-center">
                        <a class="mt-2" href="{{ route('register.index') }}">ثبت نام</a>
                        <button class="btn btn-success mt-3" type="submit">ورود</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
