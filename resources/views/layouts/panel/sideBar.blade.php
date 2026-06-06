<div class="right-menu">
    {{-- Top logout Btn --}}
    <div class="d-flex justify-content-between m-2">
        <h1 class="fs-4 text-center">پنل <span class="text-danger">ادمین</span></h1>
    <a href="{{route('auth.logout')  }}" class="btn btn-sm btn-danger">خروج</a>
    </div>
    <h2 class="fs-5 mt-2">کاربر {{ auth()->user()->name }} خوش آمدید</h2>

</div>
