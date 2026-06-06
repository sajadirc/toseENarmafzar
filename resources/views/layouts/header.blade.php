<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/assets/css/bt.css">
    @yield('styles')
</head>

<body>
    <header class="container">
        <div class="row">
            <div class="col-md-12">
                @auth
                    <div class="d-flex justify-content-start align-item-center p-3">
                        <div class="right">
                            <h6 class="mt-4 me-3">{{ auth()->user()->name }} خوش آمدید</h6>
                        </div>
                        <div class="left">
                            <a href="{{ route('auth.logout') }}" class="btn btn-danger mt-3">خروج</a>
                        </div>
                    </div>
                @endauth
                @guest
                    <div class="d-flex justify-content-start align-item-center p-3">
                        <div class="right">
                            <h6 class="mt-4 me-3"> برای ورود یا ثبت نام کلیک کنید</h6>
                        </div>
                        <div class="left">
                            <a href="{{ route('login.index') }}" class="btn btn-success mt-3">ورود</a>
                        </div>
                    </div>
                @endguest
            </div>
        </div>
    </header>
    @include('Errors.Error')
